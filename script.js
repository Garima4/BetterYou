// var scrollTimer = null;
$(document).ready(() => {
    // getMessages();
    setInterval(() => getMessages(), 1000);
    setTimeout(() => scrollToBottom(), 1100);
});

const getMessages = () => {
    // console.log(from, to);
    let url = "message_action.php";
    let msgFrom = document.getElementById("from").value;
    let formData = new FormData();
    formData.append("from", msgFrom);
    formData.append("to", document.getElementById("to").value);
    fetch(url, {method: "POST", body: formData})
        .then(response => response.text()).then(data => {
        // console.log(data);
        if (JSON.parse(data).length > 0) {
            document.getElementById("messages-area").innerHTML = "";
            let messages = JSON.parse(data);
            let msgHTML = "";
            messages.forEach(msg => {
                let {date_time, message, msg_from, msg_to} = msg
                msgHTML += "<div class='row'>";

                if (msgFrom === msg_from) {
                    msgHTML += "<div class='col-12 mb-3 text-right'>";
                    msgHTML += `<span>${msg_from}&nbsp;&nbsp;${date_time.substring(0, 5)}</span><br><span class="to">${message}</span>`;
                    msgHTML += "</div>";
                } else {
                    msgHTML += "<div class='col-12 mb-3'>";
                    msgHTML += `<p style="margin-bottom: 0;"><span class='msg-from'>${msg_from}&nbsp;&nbsp;${date_time.substring(0, 5)}</span></p><br>`;
                    msgHTML += `<span class="user-message">${message}</span>`;
                    msgHTML += "</div>";
                }

                msgHTML += "</div>";
                console.log(msgHTML);
                document.getElementById("messages-area").innerHTML = msgHTML;

            });
            // setTheInterval();
        }
    });
}
const sendMessage = () => {
    let msg = document.getElementById("message").value;
    let from = document.getElementById("from").value;
    let to = document.getElementById("to").value;
    let formData = new FormData();
    formData.append("from", from);
    formData.append("to", to);
    formData.append("msg", msg);
    let url = "action.php";
    fetch(url, {method: "POST", body: formData})
        .then(response => response.text()).then(data => {
        // console.log(data)
        if (data === "success") {
            // setTheInterval();
            document.getElementById("message").value = "";
            document.getElementById("message").focus();
            getMessages();
            scrollToBottom();
            // setInterval(() => getMessages(), 1000); // get messages..
            // setTimeout(() => scrollToBottom(), 2000);
        }
    });

}

var scroll_Timer;

function setTheInterval() {
    scroll_Timer = setInterval(() => scrollToBottom(), 10);
}

const clearTheInterval = () => {
    // console.log("scroll");
    clearInterval(scroll_Timer);
}

const scrollToBottom = () => {
    $('#messages-area').stop().animate({
        scrollTop: $('#messages-area')[0].scrollHeight
    }, 100);
}

const checkInput = (input) => {
    let btn = document.getElementById("messageBTN");
    btn.disabled = input.value === "";
}