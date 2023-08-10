<template>
    <div class="contacts-list">
        <ul>
            <li style="background-color:#333333!important;"><i style="margin-top:5.2%; margin-left:6%; margin-bottom:4%; font-size:25px; color:#0C58AC;" class="fa fa-smile-o" aria-hidden="true"></i>
               <h5 style="margin-top:5.4%; margin-left:2.4%; font-weight:600; font-size:20px; color:#0C58AC;">HAPPY CHATTY</h5></li>
            <li v-for="contact in sortedContacts" :key="contact.id" @click="selectContact(contact)" :class="{ 'selected': contact == selected }">
        
                <div class="contact pl-4">
                    <p class="name" style="font-size:15px;">{{ contact.name }}</p>
                </div>
                <span class="unread" v-if="contact.unread">{{ contact.unread }}</span>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: {
            contacts: {
                type: Array,
                default: []
            }
        },
        data() {
            return {
                selected: this.contacts.length ? this.contacts[0] : null
            };
        },
        methods: {
            selectContact(contact) {
                this.selected = contact;

                this.$emit('selected', contact);
            }
        },
        computed: {
            sortedContacts() {
                return _.sortBy(this.contacts, [(contact) => {
                    if (contact == this.selected) {
                        return Infinity;
                    }

                    return contact.unread;
                }]).reverse();
            }
        }
    }
</script>

<style lang="scss" scoped>
.contacts-list {
    flex: 2;
    max-height: 100%;
    height: 605px;
    overflow-y:auto;
    overflow-x:auto;
    border-left: 1px solid #242526;
    border-top:3px solid #242526;
    background:#333333;
    
    ul {
        list-style-type: none;
        padding-left: 0;

        li {
            display: flex;
            padding: 2px;
            border-bottom: 1px solid #333333;
            height: 50px;
            position: relative;
            cursor: pointer;

            &.selected {
                background:#1b252f;
            }

            span.unread {
                background: #82e0a8;
                color: #fff;
                position: absolute;
                right: 11px;
                top: 14px;
                display: flex;
                font-weight: 500;
                min-width: 20px;
                justify-content: center;
                align-items: center;
                line-height: 20px;
                font-size: 12px;
                padding: 0 4px;
                border-radius: 3px;
            }

            .avatar {
                flex: 1;
                display: flex;
                align-items: center;

                img {
                    width: 35px;
                    border-radius: 50%;
                    margin: 0 auto;
                }
            }

            .contact {
                flex: 3;
                font-size: 10px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: center;

                p {
                    margin: 0;

                    &.name {
                        font-weight: 550;
                        color:#E2E4E9;
                    }
                }
            }
        }
    }
}
</style>
