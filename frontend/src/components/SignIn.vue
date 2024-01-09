<template>
  <form id="demo" v-on:submit.prevent="signIn">
    <!-- text -->
    <p>
      <input type="text" v-model="email" placeholder="Email" />
      {{ email }}
    </p>
    <p>
      <input type="text" v-model="password" placeholder="Password" />
      {{ email }}
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
      this.$store.dispatch("getUserData", data);
    },
  },
};
</script>
