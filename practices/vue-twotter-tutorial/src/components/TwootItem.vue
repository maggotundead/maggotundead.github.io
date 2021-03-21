<template>
    <div class="twoot-item" @click="favouriteTwoot(twoot.id)">
        <div class="user-profile__twoot">
            <div class="twoot-item__user">
                @{{ username }}
            </div>
            <div class="twoot-item__content">
                {{ twoot.content }}
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'TwootItem',
    props: {
        username: {
            type: String,
            required: true
        },
        twoot: {
            type: Object,
            required: true
        }
    }
    // methods: {
    //     favouriteTwoot(id) {
    //         this.$emit('favourite', id);
    //     }
    // }
};
</script>

<style scoped lang="scss">
.twoot-item {
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    border: 1px solid #dfe3e8;
    box-sizing: border-box;
    cursor: pointer;
    transition: all 0.25s ease;
    margin-bottom: 10px;
    &:hover {
        transform: scale(1.1, 1.1);
    }
    &__user {
        font-weight: 700;
    }
}
</style>