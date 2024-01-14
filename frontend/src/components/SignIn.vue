<template>
  <form id="demo" v-on:submit.prevent="signIn">
    <!-- text -->
    <p>{{ errorMessage }}</p>
    <p>
      <input type="email" required v-model="email" placeholder="Email" />
    </p>
    <p>
      <input type="password" v-model="password" placeholder="Password" />
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
import { mapActions, mapGetters } from "vuex";

export default {
  el: "#demo",
  data: function () {
    return {
      email: null,
      password: null,
      checked: false,
      errorMessage: "",
    };
  },
  computed: {
    ...mapGetters(["user"]),
  },
  methods: {
    ...mapActions(["getUserData"]),
    signIn() {
      let data = {
        email: this.email,
        password: this.password,
      };
      this.getUserData(data).catch((error) => {
        this.errorMessage = error.response.data.message;
      });
    },
  },
};
</script>
