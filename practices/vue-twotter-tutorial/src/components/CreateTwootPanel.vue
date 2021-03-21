<template>
    <!-- <form class="user-profile_create-twoot" @submit.prevent="createNewTwoot" :class="{ 'exceeded': newTwootCharacterCount > 180 }"> -->
    <form class="create-twoot-panel" @submit.prevent="createNewTwoot" :class="{ 'exceeded': newTwootCharacterCount > 180 }">
        <label for="newTwoot">
            <strong>New Twoot</strong>
            ({{ newTwootCharacterCount}} / 180)
        </label>
        <textarea id="newTwoot" rows="4" v-model="state.newTwootContent"></textarea>


        <div class="create-twoot-panel__submit">
            <!-- <div class="user-profile_create-twoot-type"> -->
            <div class="create-twoot-type">
                <label for="newTwootType">
                    <strong>New Twoot Type</strong>
                    <select id="newTwootType" v-model="state.selectedTwootType">
                        <option :value="option.value" v-for="(option, index) in state.twootTypes" :key="index">
                            {{ option.name }}
                        </option>
                    </select>
                </label>
            </div>

            <button>
                Twoot It!
            </button>
        </div>
    </form>
</template>

<script>
import { reactive, computed } from 'vue';

export default {
    name: 'CreateTwootPanel',
    setup(props, ctx) {
        const state = reactive({
            newTwootContent: '',
            selectedTwootType: 'instant',
            twootTypes: [
                {
                    value: 'draft',
                    name: 'Draft'
                },
                {
                    value: 'instant',
                    name: 'Instant Twoot'
                }
            ]
        });

        const newTwootCharacterCount = computed(
            () => state.newTwootContent.length
        );

        function createNewTwoot() {
            if (state.newTwootContent && state.selectedTwootType !== 'draft') {
                ctx.emit('add-twoot', state.newTwootContent);
                state.newTwootContent = '';
            }
        }

        return {
            state,
            newTwootCharacterCount,
            createNewTwoot
        };
    }
    // computed: {
    //     newTwootCharacterCount() {
    //         return this.newTwootContent.length;
    //     }
    // },
    // methods: {
    //     createNewTwoot() {
    //         if (this.newTwootContent && this.selectedTwootType !== 'draft') {
    //             this.$emit('add-twoot', this.newTwootContent);
    //             this.newTwootContent = '';
    //         }
    //     }
    // }
};
</script>