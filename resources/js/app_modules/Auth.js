export default class Auth
{
    constructor()
    {
        this.events()
    }

    events()
    {
        window.login.onsubmit = (event) => {
            event.preventDefault()
            this.login(event)
        }
    }

    login(event)
    {
        const ajax = new XMLHttpRequest
        ajax.open("POST", "http://localhost/jalbum/login")
        ajax.onloadend = (event) => {
            this.debug(ajax.response)
        }

        let fData = new FormData()
        fData.append("umail", window.login.umail.value)
        fData.append("upwd", window.login.upwd.value)

        ajax.send(fData)
    }

    debug(args)
    {
        console.log(args)
    }

}