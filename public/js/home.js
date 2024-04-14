window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

const url = `http://127.0.0.1:8000/api`;
const searchInput = document.querySelector("#searchInput");
const searchResultContainer = document.querySelector(".find");

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
            <div class="account" data="${id}" onclick="window.location.href='http://127.0.0.1:8000/profile/${id}'" style="cursor: pointer;">
                <div class="cart">
                    <div>
                        <div class="img">
                            <img src="../${avatar}" alt="">
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
