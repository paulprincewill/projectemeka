<div id="signup_form" class="hero_form">
  <form @submit.prevent="signUp">
    <label for="signUpEmail">
      Email
      <input
        type="email"
        name="email"
        id="signUpEmail"
        placeholder="Enter your email address"
        v-model="post.email"
      />
    </label>
    <label for="signUpPass">
      Password
      <input
        type="password"
        name="password"
        id="signUpPass"
        placeholder="Enter your password"
        v-model="post.password"
      />
    </label>

    <div class="error_message" v-if="response.feedback!==undefined">
      <p>{{ this.response.feedback }}</p>
    </div>

    <input type="submit" value="GET STARTED" />
  </form>
</div>
