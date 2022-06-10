const { createApp } = Vue;

createApp({
  data() {
    return {
      loginBg: "hide",
      response: {},
      post: {},
    };
  },
  methods: {
    loginBgControl() {
      if (this.loginBg === "show") {
        this.loginBg = "hide";
      } else {
        this.loginBg = "show";
      }
    },
    login() {
      axios
        .post("../backend/form/login.php", this.post)
        .then((response) => (this.response = response.data));
    },
  },
}).mount("#login");
