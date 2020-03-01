<template>
    <div class="login_form">
        <div class="login_form_wrapper m-10">
            <h1 class="my-2 text-3xl text-white">Login Form</h1>

            <div class="bg-white border p-5 rounded shadow-2xl">
                <form action="" method="post" class="form">
                    <label for="email">Email</label>
                    <input type="email" class="border mb-3 p-1 pl-2" placeholder="Enter your email" required>

                    <label for="password">Password</label>
                    <input type="password" class="border mb-3 p-1 pl-2" placeholder="Enter your password" required>

                    <div class="my-2">
                        <button type="submit" class="bg-blue-500 border p-1 p-2 pl-5 pr-5 rounded text-white uppercase">Login</button>
                        <button type="button" class="bg-orange-400 border p-1 p-2 pl-5 pr-5 rounded text-white uppercase">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {}
        },

        computed: {
            /*
            getMeta(metaName) {
                const metas = document.getElementsByTagName('meta');

                for (let i = 0; i < metas.length; i++) {
                    if (metas[i].getAttribute('name') === metaName) {
                        console.log(metas[i].getAttribute('name'));

                        return metas[i].getAttribute('content');
                    }
                }

                return '';
            } */
        }
    }
</script>

<style lang="css" scoped>
</style>
