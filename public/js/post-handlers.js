if (typeof axios === "undefined") {
    window.axios = axios;
    window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
}

async function handleComment(event) {
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);
    const comment = formData.get("comment");
    const postId = form.getAttribute("data-post-comment");

    try {
        const response = await axios.post(`${url}/posts/${postId}/comments`, {
            comment: comment,
        });
        console.log("Comment submitted:", response.data);
        const commentData = response.data;
        const commentList = event.target.parentElement.querySelector(
            ".row .comments-list"
        );
        const commentCount = event.target
            .closest("[data-post]")
            .querySelectorAll("[data-comments-count]");
        const commentItem = document.createElement("div");
        commentItem.classList.add("row");
        commentItem.innerHTML = `
                <div class="col-1">
                    <img src="../${commentData.user.avatar}" class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
                </div>
                <div class="p-0 col-9">
                    <p class="p-0 my-0 fw-bold">${commentData.user.username} - <small>Now</small></p>
                    <p class="p-0 my-0">${commentData.comment}</p>
                    <hr>
                </div>
                <div class="col-1">
                    <div class="btn-group">
                    <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" data-comment-edit>Edit</a></li>
                        <li><a class="dropdown-item" data-comment-delete>Delete</a></li>
                    </ul>
                    </div>
                </div>
        `;
        commentList.appendChild(commentItem);
        commentCount.forEach((el) => {
            el.textContent = parseInt(el.textContent) + 1;
        });
        commentItem.setAttribute("data-comment", commentData.id);
        commentItem
            .querySelector("[data-comment-delete]")
            .addEventListener("click", handleCommentDeletion);
        commentItem.setAttribute("data-comment", commentData.id);
        commentItem
            .querySelector("[data-comment-edit]")
            .addEventListener("click", handleCommentEditing);
        form.reset();
    } catch (error) {
        console.error("Error submitting comment:", error);
    }
}

async function handleLikes(event) {
    try {
        const button = event.target.closest("[data-post-like]");
        const postId = button.getAttribute("data-post-like");
        const likeCount = button
            .closest("[data-post]")
            .querySelectorAll("[data-likes-count]");

        if (event.target.classList.contains("text-danger")) {
            const response = await axios.delete(`${url}/posts/${postId}/likes`);
            console.log("Like removed:", response.data);
            event.target.classList.toggle("text-danger");
            likeCount.forEach((el) => {
                el.textContent = parseInt(el.textContent) - 1;
            });
        } else {
            const response = await axios.post(`${url}/posts/${postId}/likes`);
            console.log("Like submitted:", response.data);
            event.target.classList.toggle("text-danger");
            likeCount.forEach((el) => {
                el.textContent = parseInt(el.textContent) + 1;
            });
        }
    } catch (error) {
        console.error("Error:", error);
    }
}

async function handleCommentDeletion(event) {
    event.preventDefault();
    const comment = event.target.closest("[data-comment]");
    const commentId = comment.getAttribute("data-comment");

    try {
        const response = await axios.delete(`${url}/comments/${commentId}`);
        console.log("Comment deleted:", response.data);
        comment.remove();
    } catch (error) {
        console.error("Error deleting comment:", error);
    }
}

async function handleCommentEditing(event) {
    event.preventDefault();
    const comment = event.target.closest("[data-comment]");
    const commentId = comment.getAttribute("data-comment");
    const commentText = comment.querySelector(".comment-text");
    commentText.innerHTML = `
        <form class="comment-form">
            <input type="text" name="editedComment" value="${commentText.textContent}" />
            <button type="submit" class="btn">Save</button>
            <button type="button" class="cancel-edit btn">Cancel</button>
        </form>
    `;

    const commentForm = comment.querySelector(".comment-form");
    commentForm.addEventListener("submit", async (event) => {
        event.preventDefault();
        const editedComment = commentForm.elements.editedComment.value;
        try {
            const response = await axios.put(`${url}/comments/${commentId}`, {
                comment: editedComment,
            });
            console.log("Comment edited:", response.data);
            commentText.textContent = editedComment;
            commentForm.remove();
        } catch (error) {
            console.error("Error editing comment:", error);
        }
    });

    const cancelEditBtn = comment.querySelector(".cancel-edit");
    cancelEditBtn.addEventListener("click", () => {
        commentText.innerHTML = commentText.textContent;
        commentForm.remove();
    });
}

async function handleSave(event) {
    try {
        const button = event.target.closest("[data-post-save]");
        const postId = button.getAttribute("data-post-save");

        if (event.target.classList.contains("text-info")) {
            const response = await axios.delete(`${url}/posts/${postId}/save`);
            console.log("Save removed:", response.data);
            event.target.classList.toggle("text-info");
        } else {
            const response = await axios.post(`${url}/posts/${postId}/save`);
            console.log("Save submitted:", response.data);
            event.target.classList.toggle("text-info");
        }
    } catch (error) {
        console.error("Error:", error);
    }
}

document.querySelectorAll("[data-post-comment]").forEach((form) => {
    form.addEventListener("submit", handleComment);
});

document.querySelectorAll("[data-post-like]").forEach((button) => {
    button.addEventListener("click", handleLikes);
});

document.querySelectorAll("[data-comment-delete]").forEach((button) => {
    button.addEventListener("click", handleCommentDeletion);
});

document.querySelectorAll("[data-comment-edit]").forEach((button) => {
    button.addEventListener("click", handleCommentEditing);
});

document.querySelectorAll("[data-post-save]").forEach((button) => {
    button.addEventListener("click", handleSave);
});
