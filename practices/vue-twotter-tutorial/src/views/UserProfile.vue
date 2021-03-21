<template>
    <div class="user-profile">
        <div class="user-profile__user-panel">
            <h1 class="user-profile__username">@{{ state.user.username }}</h1>
            <!-- <h3>{{ userId }}</h3> -->
            <div class="user-profile__admin-badge" v-if="state.user.isAdmin">
                Admin
            </div>
            <div class="user-profile__follower-count">
                <strong>Followers: </strong> {{ state.followers }}
            </div>

            <!-- <form class="user-profile_create-twoot" @submit.prevent="createNewTwoot" :class="{ 'exceeded': newTwootCharacterCount > 180 }">
                <label for="newTwoot">
                    <strong>New Twoot</strong>
                    ({{ newTwootCharacterCount}} / 180)
                </label>
                <textarea id="newTwoot" rows="4" v-model="newTwootContent"></textarea>
                <div class="user-profile_create-twoot-type">
                    <label for="newTwootType">
                        <strong>New Twoot Type</strong>
                        <select id="newTwootType" v-model="selectedTwootType">
                            <option :value="option.value" v-for="(option, index) in twootTypes" :key="index">
                                {{ option.name }}
                            </option>
                        </select>
                    </label>
                </div>

                <button>
                    Twoot!
                </button>
            </form> -->

            <CreateTwootPanel @add-twoot="addTwoot"/>

            <!-- <button @click="followUser">
                Follow
            </button> -->
        </div>
        <div class="user-profile__twoots-wrapper">
            <!-- <div class="user-profile__twoot" v-for="twoot in user.twoots " :key="twoot.id">
                {{ twoot.content}}
            </div> -->
            <TwootItem
                v-for="twoot in state.user.twoots"
                :key="twoot.id"
                :username="state.user.username"
                :twoot="twoot"
                @favourite="toggleFavourite"
            />
        </div>
    </div>
</template>

<script>
import { reactive, computed } from 'vue';
import { useRoute } from 'vue-router';
import { users } from '../assets/users';
import TwootItem from '../components/TwootItem';
import CreateTwootPanel from '../components/CreateTwootPanel';

export default {
    name: 'UserProfile',
    components: {
        CreateTwootPanel,
        TwootItem
    },
    setup() {
        const route = useRoute();

        const userId = computed(() => route.params.userId);

        const state = reactive({
            followers: 0,
            user: users[userId.value - 1] || users[0]
            // user: {
            //     id: 1,
            //     username: '_RomanSalko',
            //     firstName: 'Roma',
            //     lastName: 'Salok',
            //     email: 'maggotundead@gmail.com',
            //     isAdmin: true,
            //     // isAdmin: false,
            //     twoots: [
            //         {
            //             id: 1,
            //             content: 'Twotter is Amazing'
            //         },
            //         {
            //             id: 2,
            //             content:
            //                 'Dont forget to subscribe to The Earth is Square'
            //         }
            //     ]
            // }
        });

        console.log(state.user);

        function addTwoot(twoot) {
            state.user.twoots.unshift({
                id: state.user.twoots.length + 1,
                content: twoot
            });
        }

        return {
            state,
            addTwoot,
            userId
        };
    }
    // data() {
    //     return {
    //         newTwootContent: '',
    //         selectedTwootType: 'instant',
    //         twootTypes: [
    //             {
    //                 value: 'draft',
    //                 name: 'Draft'
    //             },
    //             {
    //                 value: 'instant',
    //                 name: 'Instant Twoot'
    //             }
    //         ],
    //         followers: 0,
    //         user: {
    //             id: 1,
    //             username: '_RomanSalko',
    //             firstName: 'Roma',
    //             lastName: 'Salok',
    //             email: 'maggotundead@gmail.com',
    //             isAdmin: true,
    //             // isAdmin: false,
    //             twoots: [
    //                 {
    //                     id: 1,
    //                     content: 'Twotter is Amazing'
    //                 },
    //                 {
    //                     id: 2,
    //                     content:
    //                         'Dont forget to subscribe to The Earth is Square'
    //                 }
    //             ]
    //         }
    //     };
    // },
    // watch: {
    //     followers(newFollowerCount, oldFollowerCount) {
    //         if (oldFollowerCount < newFollowerCount) {
    //             console.log(`${this.user.username} has gained a follower!`);
    //         }
    //     }
    // },
    // computed: {
    //     fullName() {
    //         return `${this.user.firstName} ${this.user.lastName}`;
    //     },
    //     newTwootCharacterCount() {
    //         return this.newTwootContent.length;
    //     }
    // },
    // methods: {
    //     followUser() {
    //         this.followers++;
    //         // this.followers = this.followers + 1
    //         // this.followers += 1
    //     },
    //     toggleFavourite(id) {
    //         console.log(`favourite twoot #${id}`);
    //     }
    //     // createNewTwoot() {
    //     //     if (this.newTwootContent && this.selectedTwootType !== 'draft') {
    //     //         this.user.twoots.unshift({
    //     //             id: this.user.twoots.length + 1,
    //     //             content: this.newTwootContent
    //     //         });
    //     //         this.newTwootContent = '';
    //     //     }
    //     // }
    // },
    // mounted() {
    //     this.followUser();
    // }
};
</script>

<style scoped lang="scss">
h1 {
    margin: 0;
}

.user-profile {
    display: grid;
    grid-template-columns: 1fr 3fr;
    width: 100%;
    padding: 50px 5%;

    &__user-panel {
        display: flex;
        flex-direction: column;
        margin-right: 50px;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        border: 1px solid #dfe3e8;
    }

    &__admin-badge {
        background: rebeccapurple;
        color: #fff;
        border-radius: 5px;
        margin-right: auto;
        padding: 0 10px;
        font-weight: 700;
    }

    &_twoots-wrapper {
        display: grid;
        grid-gap: 10px;
    }

    &_create-twoot {
        display: flex;
        flex-direction: column;
        padding-top: 20px;
        &.exceeded {
            color: red;
            border-color: red;
        }
        button {
            background: red;
            border: 0;
            color: #fff;
        }
    }
}
</style>