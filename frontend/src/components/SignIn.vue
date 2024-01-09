<template>
  <form id="demo" v-on:submit.prevent="signIn">
    <!-- text -->
    <p>
      <input type="text" v-model="email" placeholder="Email" />
      {{ msg }}
    </p>
    <p>
      <input type="text" v-model="password" placeholder="Password" />
      {{ msg }}
    </p>
    <!-- checkbox -->
    <p>
      <input type="checkbox" v-model="checked" />
      {{ checked ? "yes" : "no" }}
    </p>
    <p>
      <button type="submit">Sign In</button>
    </p>
  </form>
</template>

<script>
import UserRepository from "@/repositories/UserRepository";
export default {
  el: "#demo",
  data: function () {
    return {
      email: null,
      password: null,
      checked: false,
    };
  },
  methods: {
    signIn() {
      UserRepository.signIn({
        email: this.email,
        password: this.password,
      });
    },
  },
};
</script>
