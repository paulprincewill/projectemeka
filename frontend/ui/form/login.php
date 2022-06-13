        <div class="form_wrapper" v-if="loginBg==='show'">
            <form @submit.prevent="login">
                <span @click="loginBgControl">X</span>
                <label for="loginEmail">
                    Email
                    <input
                    type="email"
                    name=""
                    id="loginEmail"
                    placeholder="Enter your email address"
                    v-model="post.email"
                    />
                </label>
                <label for="loginPass">
                    Password
                    <input
                    type="password"
                    name=""
                    id="loginPass"
                    placeholder="Enter your password"
                    v-model="post.password"
                    />
                </label>
                <div class="error_message" v-if="response.feedback!==undefined">
                    <p>X &nbsp; {{this.response.feedback}}</p>
                </div>
                <input type="submit" value="LOGIN" />
            </form>
        </div>