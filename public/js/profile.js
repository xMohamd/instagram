const followBtn = document.getElementById("followFormBtn");
const followForm = document.getElementById('followForm')
if (followBtn)
    followBtn.addEventListener('click', () => {
        followForm.submit();
    })


const unfollowBtn = document.getElementById("unfollowFormBtn");
const unfollowForm = document.getElementById('unfollowForm')
console.log(unfollowForm);
if (unfollowBtn)
    unfollowBtn.addEventListener('click', () => {
        unfollowForm.submit();
    })
