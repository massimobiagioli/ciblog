<template>
    <div class="container">
        <form class="form-signin" @submit.prevent="loginConfirm">
            <h2 class="form-signin-heading">Login</h2>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input id="rememberme" type="checkbox"> Ricordami
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Conferma</button>
        </form>
    </div>
</template>

<style>
    .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
</style>

<script>
export default {
  ready() {
    let loginInfoStr = localStorage.getItem('login-info'); 
    if (loginInfoStr !== null) {
        let loginInfo = JSON.parse(loginInfoStr);
        $("#inputEmail").val(loginInfo.email);
        $("#inputPassword").val(loginInfo.email);
    }    
  },
  vuex: {
    actions: {
      loginConfirm: ({ dispatch }) => {
        dispatch('LOGIN_CONFIRM', {
          email: $("#inputEmail").val(),
          password: $("#inputPassword").val(),
          rememberme: $("#rememberme").prop('checked')
        });
      }
    }
  }
}
</script>