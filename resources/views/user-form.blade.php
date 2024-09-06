<div>
    <h2>Add New User</h2>
    <form action="/add-user" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Name" name="username">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Email" name="email">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User City" name="city">
        </div>
        <div class="input-wrapper">
            <Button>Add New User</Button>
        </div>
    </form>
</div>
<style>
    input {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    }

    .input-wrapper {
        margin: 10px;
    }

    button {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: #fff;
        cursor: pointer;
    }
</style>