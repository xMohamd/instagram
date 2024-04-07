window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

const url = `http://127.0.0.1:8000/api`;
const searchInput = document.querySelector("#searchInput");
const searchResultContainer = document.querySelector(".find");
const commentsForms = document.querySelectorAll("[data-comment-post-id]");

console.log(commentsForms);

searchInput.addEventListener("input", async () => {
    if (!searchInput.value) {
        return;
    }

    try {
        const response = await axios.get(`${url}/users/${searchInput.value}`);
        console.log("Data fetched:", response.data);
        let data = response.data;
        const searchResultCart = document.querySelectorAll(".find .account");
        searchResultCart.forEach((el) => {
            el.remove();
        });
        console.log(searchResultContainer);
        data.forEach(({ id, name, username, avatar }) => {
            const item = `
            <div class="account" data="${id}">
                <div class="cart">
                    <div>
                        <div class="img">
                            <img src="${avatar}" alt="">
                        </div>
                        <div class="info">
                            <p class="name">${name}</p>
                            <p class="second_name">${username}</p>
                        </div>
                    </div>
                    <div class="clear">
                        <a href="#">X</a>
                    </div>
                </div>
            </div>
            `;
            searchResultContainer.insertAdjacentHTML("beforeend", item);
            const resultItem = document.querySelector(`[data="${id}"]`);
            const resultItemXBtn = document.querySelector(
                `[data="${id}"] .clear`
            );
            resultItemXBtn.addEventListener("click", () => {
                resultItem.remove();
                const itemId = id;
                data = data.filter(({ id }) => id != itemId);
                if (!data.length) {
                    displayNoResult("No recent searches");
                    searchInput.value = "";
                }
                console.log(data);
            });
        });

        let displayNoResult = (msg) => {
            const errorMsg = `
                <div class="account">
                <div class="cart center-error">
                    <div>
                        <div class="info">
                            <p class="searchError" style="text-align: center;">${msg}...</p>
                        </div>
                    </div>
                </div>
                </div>
                `;
            searchResultContainer.insertAdjacentHTML("beforeend", errorMsg);
        };

        if (!data.length) {
            console.log("no data");
            displayNoResult("No Result Found");
        }

        const clearBtn = document.getElementById("clearBtn");
        clearBtn.addEventListener("click", () => {
            data = [];
            searchResultContainer.innerHTML = "";
            searchResultContainer.innerHTML = `
            <div class="desc">
                <h4>Recent</h4>
                <p><a href="#" id="clearBtn">Clear all</a></p>
            </div>
        `;
            displayNoResult("No recent searches");
            searchInput.value = "";
        });
    } catch (error) {
        console.error("Error fetching data:", error);
    }
});

async function handleComment(event) {
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);
    const comment = formData.get("comment");
    const postId = form.getAttribute("data-comment-post-id");

    axios
        .post(`${url}/posts/${postId}/comments`, {
            comment: comment,
        })
        .then((response) => {
            //add comment to DOM
            console.log("Comment submitted:", response.data);
            const comment = response.data;
            const commentList = event.target.parentElement.querySelector(
                ".row .comments-list"
            );
            const commentItem = `
            <div class="row">
                <div class="col-1">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                        height="22" alt="Avatar" loading="lazy" />
                </div>
                <div class="p-0 col-11">
                    <p class="p-0 my-0 fw-bold">${comment.user.username}</p>
                    <p class="p-0 my-0">${comment.comment}</p>
                    <hr>
                </div>
            </div>
            `;
            commentList.insertAdjacentHTML("beforeend", commentItem);
        })
        .catch((error) => {
            console.error("Error submitting comment:", error);
        });
}

async function handleLike(event) {
    const button = event.target;
    const postId = button.getAttribute("data-like-post-id");

    axios
        .post(`${url}/posts/${postId}/likes`)
        .then((response) => {
            console.log("Like submitted:", response.data);
        })
        .catch((error) => {
            console.error("Error submitting like:", error);
        });
}

document.querySelectorAll("[data-comment-post-id]").forEach((form) => {
    form.addEventListener("submit", handleComment);
});

document.querySelectorAll("[data-like-post-id]").forEach((button) => {
    button.addEventListener("click", handleLike);
});
