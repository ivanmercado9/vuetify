<template>
  <div class>
    <template>
      <v-data-table
        dense
        :headers="headers"
        :items="members"
        :search="search"
        item-key="full_name"
        class="elevation-0"
      >
        <template v-slot:top>
          <v-toolbar flat color="white">
            <v-toolbar-title>Waiting List</v-toolbar-title>
            <v-divider class="mx-4" inset vertical></v-divider>
            <v-spacer></v-spacer>
            <v-text-field
              v-model="search"
              append-icon="search"
              label="Search"
              dense
              outlined
              hide-details
            ></v-text-field>
          </v-toolbar>
        </template>
        <template v-slot:item.status="{ item }">
          <v-chip x-small v-if="item.status == 'waiting'" color="red" dark>Waiting</v-chip>
          <v-chip x-small v-if="item.status == 'attending'" color="amber" dark>Waiting</v-chip>
          <v-chip x-small v-if="item.status == 'attended'" color="light-green" dark>Attended</v-chip>
        </template>
        <template v-slot:item.action="{ item }">
          <v-menu bottom left>
            <template v-slot:activator="{ on }">
              <v-btn icon v-on="on">
                <v-icon>mdi-dots-vertical</v-icon>
              </v-btn>
            </template>

            <v-list>
              <v-list-item @click>
                <v-list-item-title>Action</v-list-item-title>
              </v-list-item>
              <v-list-item @click>
                <v-list-item-title>Remove</v-list-item-title>
              </v-list-item>
            </v-list>
          </v-menu>
        </template>
      </v-data-table>
    </template>
  </div>
</template>

<script>
export default {
  // inject: ['theme'],
  data: () => ({
    // Table
    search: "",
    headers: [
      { text: "Full Name", align: "left", value: "full_name" },
      { text: "Member #", value: "member_number" },
      { text: "Service", value: "service" },
      { text: "Created at", value: "created" },
      { text: "Start at", value: "start" },
      { text: "Finish at", value: "finished" },
      { text: "Added By", value: "added_by" },
      { text: "Assigned to", value: "assigned_to" },
      { text: "Status", value: "status" },
      { text: "Express", value: "express" },
      { text: "Actions", value: "action", sortable: false }
    ],
    members: [
      {
        full_name: "Dorsy Maverick",
        member_number: "80040320",
        service: "ATH Movil",
        created: "12:35pm",
        start: "1:00pm",
        finished: "2:00pm",
        added_by: "Martinita Campbell",
        assigned_to: "Jack Dohorson",
        status: "waiting",
        express: "NO"
      },
      {
        full_name: "Mojica Landen",
        member_number: "80040320",
        service: "ATH Movil",
        created: "12:35pm",
        start: "1:00pm",
        finished: "2:00pm",
        added_by: "Martinita Campbell",
        assigned_to: "Jack Dohorson",
        status: "attended",
        express: "NO"
      }
    ]
  }),
};
</script>