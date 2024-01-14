import Client from "./Clients/AxiosClient";

export default {
  signIn(payload) {
    return Client.post("login_check", payload);
  },
  signUp(payload) {
    return Client.post("signup", payload);
  },
};
