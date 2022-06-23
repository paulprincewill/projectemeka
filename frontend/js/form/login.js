const { createApp } = Vue;

createApp({
  data() {
    return {
      loginBg: "hide",
      response: {},
      post: {
        email: "",
        password: "",
      },
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
        .then((response) => (this.response = response.data))
        .then(() => {
          console.log(this.response);
        })
        .then(() => {
          if (this.response.success === true) {
            window.location.assign("add_properties.php");
          }
        });
    },
  },
}).mount("#login");
