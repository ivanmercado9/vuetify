<template>
<div class="fill-height">
    <v-row class="fill-height">
        <v-col sm="3" md="2" fill-height class="pt-0 pr-0 white">
            <v-card class="pa-3" flat tile>
                <h3 class="subtitle-1 grey--text text--darken-3">Add to waiting list</h3>
                <v-divider class="mb-5"></v-divider>
                <v-text-field label="Member Number" v-model="member_number" placeholder="#######" outlined dense></v-text-field>
                <v-text-field label="Full Name" v-model="full_name" placeholder="John Doe" outlined dense></v-text-field>
                <v-autocomplete label="Service" v-model="service" :items="services" placeholder="Select service" outlined dense multiple chips clear-icon></v-autocomplete>
                <v-select label="Assign to:" v-model="assign_to" :items="officers" placeholder="Select officer" outlined dense clearable></v-select>
                <v-textarea v-model="comment" label="Comments" placeholder outlined auto-grow rows="3"></v-textarea>
                <v-autocomplete label="Heard About Us" v-model="heard" :items="heard" placeholder="Select One" outlined dense></v-autocomplete>
                <v-switch v-model="express" hide-details color="red" label="Express"></v-switch>
                <v-switch v-model="appointment" hide-details color="primary" label="Appointment"></v-switch>
                <!-- <v-divider class="my-5"></v-divider> -->
                <v-btn block class="mt-5" color="blue darken-3" dark>ADD TO LIST</v-btn>
            </v-card>
        </v-col>
        <v-col>
            <v-layout row wrap pa-3>
                <v-flex xs12 sm3 px-3>
                    <v-card hover color="">
                        <v-card-text class="px-0 py-1">
                            <v-layout row>
                                <v-flex xs3>
                                    <v-btn large depressed color="primary" class="font-weight-bold square-btn"><span class="font-weight-bold">
                                            <v-icon>timelapse</v-icon>
                                        </span></v-btn>
                                </v-flex>
                                <v-flex xs9>
                                    <div class="mt-2">Waiting</div>
                                    <div class="font-weight-bold">13</div>
                                </v-flex>
                            </v-layout>
                        </v-card-text>
                    </v-card>
                </v-flex>
                <v-flex xs12 sm3 px-3>
                    <v-card hover color="">
                        <v-card-text class="px-0 py-1">
                            <v-layout row>
                                <v-flex xs3>
                                    <v-btn large depressed color="error" class="font-weight-bold square-btn"><span class="font-weight-bold">
                                            <v-icon>mdi-clock-fast</v-icon>
                                        </span></v-btn>
                                </v-flex>
                                <v-flex xs9>
                                    <div class="mt-2">Attending</div>
                                    <div class="font-weight-bold">02</div>
                                </v-flex>
                            </v-layout>
                        </v-card-text>
                    </v-card>
                </v-flex>
                <v-flex xs12 sm3 px-3>
                    <v-card hover color="">
                        <v-card-text class="px-0 py-1">
                            <v-layout row>
                                <v-flex xs3>
                                    <v-btn large depressed color="warning" class="font-weight-bold square-btn"><span class="font-weight-bold">
                                            <v-icon>mdi-alert-decagram</v-icon>
                                        </span></v-btn>
                                </v-flex>
                                <v-flex xs9>
                                    <div class="mt-2">Cancelled</div>
                                    <div class="font-weight-bold">19</div>
                                </v-flex>
                            </v-layout>
                        </v-card-text>
                    </v-card>
                </v-flex>
                <v-flex xs12 sm3 px-3>
                    <v-card hover color="">
                        <v-card-text class="px-0 py-1">
                            <v-layout row>
                                <v-flex xs3>
                                    <v-btn large depressed color="success" class="font-weight-bold square-btn"><span class="font-weight-bold">
                                            <v-icon>mdi-checkbox-marked-outline</v-icon>
                                        </span></v-btn>
                                </v-flex>
                                <v-flex xs9>
                                    <div class="mt-2">Completed</div>
                                    <div class="font-weight-bold">09</div>
                                </v-flex>
                            </v-layout>
                        </v-card-text>
                    </v-card>
                </v-flex>
            </v-layout>
            <v-card class="pa-3" outlined tile>
                <WaitingList></WaitingList>
            </v-card>
        </v-col>
    </v-row>
</div>
</template>

<script>
import WaitingList from "./components/WaitingTable.vue";
export default {
    components: {
        WaitingList
    },
    data: () => ({
        // Form
        full_name: "",
        member_number: "",
        service: "",
        heard: "",
        assign_to: "",
        comment: "",
        express: false,
        appointment: false,
        officers: ["Captain Marvel", "Tony Stark"],
        services: [
            "Autocompletes",
            "Comboboxes",
            "Forms",
            "Inputs",
            "Overflow Buttons",
            "Selects",
            "Selection Controls",
            "Sliders",
            "Textareas",
            "Text Fields"
        ],
        heard: [
            "Autocompletes",
            "Comboboxes",
            "Forms",
            "Inputs",
            "Overflow Buttons",
            "Selects",
            "Selection Controls",
            "Sliders",
            "Textareas",
            "Text Fields"
        ]
    }),
    
};
</script>
