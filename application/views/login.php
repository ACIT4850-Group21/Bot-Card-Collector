<form method="post">
    <label for="username">Username: </label>
    <input type="text" name="username"/><br/><br/>
    <label for="password">Password: </label>
    <input type="password" name="password"/><br/><br/>
    <input type="submit" name="login" value="LOGIN" />
    <button><a href="/registration">Sign-up</a></button><br/>
    {error-message}
</form>