<template>
  <div class="fill-height">
    <v-row class="fill-height">
      <v-col sm="2" fill-height class="pt-0 pr-0 white">
        <v-card class="px-0" flat tile>
          <template>
            <div class="text-center my-5">
              <v-avatar color="blue darken-1" size="80">
                <span class="white--text headline">CJ</span>
              </v-avatar>
              <h3 class="subtitle-2 mt-5">Carlos Joniel Santiago</h3>
              <h3 class="subtitle-2 my-0 font-weight-light overline gray--text">#302678</h3>
              <!-- <h3 class="subtitle-2 my-0 font-weight-light overline gray--text">Non Member</h3> -->
            </div>
            <v-list two-line>
              <v-list-item @click>
                <v-list-item-icon>
                  <v-icon color="blue darken-1">mdi-phone</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                  <v-list-item-title style="font-size:14px">(650) 555-1234</v-list-item-title>
                  <v-list-item-subtitle>Mobile</v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>

              <v-list-item @click>
                <v-list-item-action></v-list-item-action>

                <v-list-item-content>
                  <v-list-item-title style="font-size:14px">(323) 555-6789</v-list-item-title>
                  <v-list-item-subtitle>Work</v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>

              <v-divider inset></v-divider>

              <v-list-item @click>
                <v-list-item-icon>
                  <v-icon color="blue darken-1">mdi-email</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                  <v-list-item-title style="font-size:14px">aliconnors@example.com</v-list-item-title>
                  <v-list-item-subtitle>Personal</v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>

              <v-list-item @click>
                <v-list-item-action></v-list-item-action>

                <v-list-item-content>
                  <v-list-item-title style="font-size:14px">ali_connors@example.com</v-list-item-title>
                  <v-list-item-subtitle>Work</v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>

              <v-divider inset></v-divider>

              <v-list-item @click>
                <v-list-item-icon>
                  <v-icon color="blue darken-1">mdi-map-marker</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                  <v-list-item-title style="font-size:14px">1400 Main Street</v-list-item-title>
                  <v-list-item-subtitle>Orlando, FL 79938</v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>
            </v-list>
          </template>
        </v-card>
      </v-col>
      <v-col sm="3">
        <v-card class="pa-3" outlined tile>
          <h3 class="subtitle-1 grey--text text--darken-3">Forms & Letters</h3>
          <v-divider class="mb-5"></v-divider>
        </v-card>
      </v-col>
      <v-col>
        <v-card class="pa-3" outlined tile>
          <h3 class="subtitle-1 grey--text text--darken-3">Last Visits</h3>
          <v-divider class="mb-5"></v-divider>
          <template>
            <v-data-table
              dense
              :headers="headers"
              :items="desserts"
              item-key="name"
              class="elevation-0"
            ></v-data-table>
          </template>
        </v-card>
      </v-col>
    </v-row>
  </div>
</template>

<script>
export default {
  data: () => ({
    desserts: [
      {
        name: "Frozen Yogurt",
        calories: 159,
        fat: 6.0,
        carbs: 24,
        protein: 4.0,
        iron: "1%"
      },
      {
        name: "Ice cream sandwich",
        calories: 237,
        fat: 9.0,
        carbs: 37,
        protein: 4.3,
        iron: "1%"
      },
      {
        name: "Eclair",
        calories: 262,
        fat: 16.0,
        carbs: 23,
        protein: 6.0,
        iron: "7%"
      },
      {
        name: "Cupcake",
        calories: 305,
        fat: 3.7,
        carbs: 67,
        protein: 4.3,
        iron: "8%"
      },
      {
        name: "Gingerbread",
        calories: 356,
        fat: 16.0,
        carbs: 49,
        protein: 3.9,
        iron: "16%"
      },
      {
        name: "Jelly bean",
        calories: 375,
        fat: 0.0,
        carbs: 94,
        protein: 0.0,
        iron: "0%"
      },
      {
        name: "Lollipop",
        calories: 392,
        fat: 0.2,
        carbs: 98,
        protein: 0,
        iron: "2%"
      },
      {
        name: "Honeycomb",
        calories: 408,
        fat: 3.2,
        carbs: 87,
        protein: 6.5,
        iron: "45%"
      },
      {
        name: "Donut",
        calories: 452,
        fat: 25.0,
        carbs: 51,
        protein: 4.9,
        iron: "22%"
      },
      {
        name: "KitKat",
        calories: 518,
        fat: 26.0,
        carbs: 65,
        protein: 7,
        iron: "6%"
      }
    ],
    headers: [
      { text: "Date", align: "left", value: "date" },
      { text: "Attended at:", value: "hour" },
      { text: "Attended by:", value: "attended_by" },
      { text: "Service received", value: "service" },
    ]
  }),
  mounted() {
    const self = this;

    self.$store.commit("setBreadcrumbs", [{ label: "Dashboard", name: "" }]);
  }
};
</script>