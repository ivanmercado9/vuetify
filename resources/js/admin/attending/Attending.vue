<template>
  <div class="fill-height">
    <v-row class="fill-height">
      <v-col sm="3" md="2" fill-height class="pt-0 pr-0 white">
        <v-card class="pa-3" flat tile>
          <h3 class="subtitle-1 grey--text text--darken-3">Add to waiting list</h3>
          <v-divider class="mb-5"></v-divider>
          <v-text-field label="Full Name" placeholder="John Doe" outlined dense></v-text-field>
          <v-text-field label="Member Number" placeholder="#######" outlined dense></v-text-field>
          <v-autocomplete label="Service" :items="services" placeholder="Select service" outlined dense></v-autocomplete>
          <v-select label="Assign to:" hide-details :items="officers" placeholder="Select officer" outlined dense></v-select>
          <v-switch v-model="express" hide-details color="red" label="Express" ></v-switch>
          <v-switch v-model="appointment" hide-details color="primary" label="Appointment" ></v-switch>
          <v-divider class="my-5"></v-divider>
          <v-btn block class="" color="blue darken-3" dark>ADD TO LIST</v-btn>
        </v-card>
      </v-col>
      <v-col>
        <v-card class="pa-3" outlined tile>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae laudantium totam magni</p>
        </v-card>
      </v-col>
    </v-row>
  </div>
</template>

<script>
export default {
  // inject: ['theme'],
  data() {
    return {
      express: false,
      appointment: false,
      officers: [
        "Captain Marvel",
        "Tony Stark"
      ],
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
      ]
    };
  },
  mounted() {
    const self = this;

    self.$store.commit("setBreadcrumbs", [{ label: "Dashboard", name: "" }]);
  }
};
</script>