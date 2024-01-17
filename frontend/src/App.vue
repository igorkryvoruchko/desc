<template>
  <v-app>
    <v-main>
      <v-toolbar
        dark
        prominent
        image="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg"
      >
        <v-app-bar-nav-icon></v-app-bar-nav-icon>

        <v-toolbar-title
          ><router-link to="/" class="home-link"
            >Desc</router-link
          ></v-toolbar-title
        >

        <v-spacer></v-spacer>
        <h3 class="home-link">{{ this.user.name }}</h3>
        <v-btn v-if="this.user.name" @click="signOutAction" class="home-link">
          Sign Out
        </v-btn>
      </v-toolbar>
      <router-view />
    </v-main>
  </v-app>
</template>

<script>
import { mapActions, mapState } from "vuex";
export default {
  name: "App",

  data: () => ({
    //
  }),
  computed: {
    ...mapState({
      user: "user",
    }),
  },
  methods: {
    ...mapActions(["signOutAction"]),
  },
};
</script>

<style>
.home-link {
  color: antiquewhite;
}
</style>
