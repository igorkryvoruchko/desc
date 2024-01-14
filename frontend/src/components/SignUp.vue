<template>
  <form id="demo" v-on:submit.prevent="signUp">
    <!-- text -->
    <p>
      <input type="text" required v-model="name" placeholder="User Name" />
      {{ errorMessages.name }}
    </p>
    <p>
      <input type="email" required v-model="email" placeholder="Email" />
      {{ errorMessages.email }}
    </p>
    <p>
      <input type="password" v-model="password" placeholder="Password" />
      {{ errorMessages.password }}
    </p>
    <p>
      <input type="password" placeholder="Password Confirm" />
    </p>
    <p>
      <button type="submit">Sign Up</button>
    </p>
  </form>
</template>

<script>
import { mapActions } from "vuex";
import userRepository from "@/repositories/UserRepository";
export default {
  el: "#demo",
  data: function () {
    return {
      name: null,
      email: null,
      password: null,
      errorMessages: {
        name: null,
        email: null,
        password: null,
      },
    };
  },
  methods: {
    ...mapActions(["getUserData"]),
    signUp() {
      let data = {
        name: this.name,
        email: this.email,
        password: this.password,
      };
      userRepository.signUp(data).catch((error) => {
        console.log(error);
        this.errorMessages = error.response.data.errors;
      });
    },
  },
};
</script>
