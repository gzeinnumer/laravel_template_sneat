<script>
    function paramsToJson(url) {
        var params = url.substring(url.indexOf("?"));
        var jsonData = "{";

        if (url.includes("?")) {
            params = params.replace("?", "");
            params = params.split("&");
            for (var i = 0; i < params.length; i++) {
                var d = params[i];
                d = d.split("=");
                jsonData += "\"" + d[0] + "\":\"" + d[1] + "\",";
            }
            jsonData = jsonData.slice(0, -1);
        } else {
            params = "";
        }
        jsonData += "}";
        return jsonData;
    }
</script>

<script>
    function makeJson(elements) {
        var jform = new FormData();

        for (var i = 0; i < elements.length; i++) {
            var item = elements.item(i);
            var temp = "#" + item.id;
            if (item.type == "file") {
                jform.append(item.name, $(temp).get(0).files[0]);
            } else {
                jform.append(item.name, item.value);
            }
        }
        return jform;
    }

    function onMessageV4(data, myForm) {
        if (data.title == "Debug") {
            showModalDebug(data.title, data.msg);
        } else {
            if (data.code == 200) {
                if (myForm != null) {
                    resetForm(myForm);
                }
                showModalSuccess(data.title, data.msg);
            } else {
                showModalFailed(data.title, data.msg);
            }
        }
    }


    function resetForm(myForm) {
        for (var i = 0; i < myForm.length; i++) {
            var d = myForm.elements[i];
            if (d.name != "_token") {
                d.value = "";
            }
        }
    }

    function randomString(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }
</script>

<script>
    function secondToTime(totalSeconds) {
        let day = Math.floor(totalSeconds / 86400);
        totalSeconds = totalSeconds % 86400;
        let hours = Math.floor(totalSeconds / 3600);
        totalSeconds = totalSeconds % 3600;
        let minutes = Math.floor(totalSeconds / 60);
        let seconds = totalSeconds % 60;

        var msg = "";

        if (day > 0) {
            // day = String(day).padStart(2, "0");
            msg += " " + day + " Hari\n"
        }
        if (hours > 0) {
            // hours = String(hours).padStart(2, "0");
            msg += " " + hours + " Jam\n"
        }
        if (minutes > 0) {
            // minutes = String(minutes).padStart(2, "0");
            msg += " " + minutes + " Menit\n"
        }
        if (seconds > 0) {
            // seconds = String(seconds).padStart(2, "0");
            msg += " " + seconds + " Detik\n"
        }
        if (msg.length == 0) {
            return "0 Detik";
        }
        return msg;
    }
</script>
