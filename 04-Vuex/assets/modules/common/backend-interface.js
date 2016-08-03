export default class {
    
    constructor(serverUrl) {
        this.serverUrl = serverUrl;
    }

    sendEvent(path, verb, toSend, onSuccessClosure) {
        console.log("jquery ajax");
        $.ajax({
            type: verb,
            url: this.fullPath(path),
            data: toSend,
            success: onSuccessClosure
        });
    }

    redirect(path) {
        $(location).attr('href', this.fullPath(path));
    }

    fullPath(path) {
        return this.serverUrl + path;
    }

}