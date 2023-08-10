<template>
    <div class="composer">
        <textarea v-model="message" @keydown.enter="send" placeholder="Type your message"></textarea>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: ''
            };
        },
        methods: {
            send(e) {
                e.preventDefault();
                
                if (this.message == '') {
                    return;
                }

                this.$emit('send', this.message);
                this.message = '';
            }
        }
    }
</script>

<style lang="scss" scoped>
.composer {
    background:#333333;
    padding: none;
    margin: none;
    border-right: 3px solid #242526;
}
.composer textarea {
    width: 96%;
    margin: 15px;
    resize: none;
    border-radius: 25px;
    padding: 0px;
    background-color: #242526;
    border: none;
}
.composer textarea:focus {
    outline:none;
}
textarea[placeholder]
{
    padding-top:1.05rem;
    padding-bottom:0rem;
    padding-left:1.5rem;
}


</style>

