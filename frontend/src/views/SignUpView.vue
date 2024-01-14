<template>
  <div class="sign_up">
    <h1>Sign Up</h1>
    <SignUp></SignUp>
  </div>
</template>

<script>
// @ is an alias to /src
import SignUp from "@/components/SignUp.vue";

export default {
  name: "HomeView",
  components: { SignUp },
};
</script>
