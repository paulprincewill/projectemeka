<section id="add_property">

    <form v-on:submit.prevent="add_property">
        <input type="text" v-model="post.location">
        <input type="hidden" v-model="post.user">
        <button type='submit'> Add new property </button>

        <p> {{ response.feedback }} </p>
    </form>

</section>


