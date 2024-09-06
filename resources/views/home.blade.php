<x-message-banner message="User Login Successfully" class="success" />
<x-message-banner message="User Signup Successfully" class="success" />
<div>
    <h1>Home Page</h1>
</div>

<x-message-banner message="Password not correct please try again" class="error" />
<x-message-banner message="Password not correct please try again" class="warning" />


<style>
    .success {
        background: lightgreen;
        color: green;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }

    .error {
        background: #fda1a1;
        color: red;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }

    .warning {
        background: rgb(246, 219, 171);
        color: orange;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
</style>
