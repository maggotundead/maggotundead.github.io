<template>
    <div id="app">
        <router-link to="/">
            <div class="navigation__logo">
                Twotter
            </div>
        </router-link>
        <div class="navigation__user">
            {{ state.user.username }}
        </div>

        <!-- <UserProfile/> -->
        <router-view />
    </div>
</template>

<script>
import { reactive } from 'vue';
// import UserProfile from './components/UserProfile';

export default {
    name: 'App',
    // components: { UserProfile },
    setup() {
        const state = reactive({
            user: {
                username: '_RomanSalko'
            }
        });

        return {
            state
        };
    }
};
</script>

<style lang="scss">
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #f3f5fa;
}
</style>
