<template>
  <div class="sign_in">
    <h1>Sign In</h1>
    <SignIn></SignIn>
  </div>
</template>

<script>
// @ is an alias to /src
import SignIn from "@/components/SignIn.vue";

export default {
  name: "SignInView",
  components: { SignIn },
};
</script>
