createApp({
  data() {
    return {
      response: {},
      post: {
        email: "",
        password: "",
      },
    };
  },
  methods: {
    signUp() {
      axios
        .post("../backend/form/signup.php", this.post)
        .then((response) => (this.response = response.data))
        .then(() => console.log(this.post))
        .then(() => console.log(this.response))
        .then(() => {
          if (this.response.success === true) {
            window.location.assign("add_properties.php");
          }
        });
    },
  },
}).mount("#signup_form");
