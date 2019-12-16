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
              <!-- <h3 class="subtitle-2 mt-5">Carlos Joniel Santiago</h3> -->
              <!-- <h3 class="subtitle-2 my-0 font-weight-light overline gray--text">#302678</h3> -->
              <!-- <h3 class="subtitle-2 my-0 font-weight-light overline gray--text">Non Member</h3> -->
            </div>
            <v-list two-line>
              <v-list-item @click>
                <v-list-item-action></v-list-item-action>

                <v-list-item-content>
                  <v-list-item-title class="subtitle-2">Carlos Joniel Santiago</v-list-item-title>
                  <v-list-item-subtitle>#302678</v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>
            </v-list>
            <v-divider inset></v-divider>
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
        <!-- Actions toolbar -->
        <v-card class="pa-0 mb-3" outlined tile>
          <v-toolbar flat>
            <v-spacer></v-spacer>
            <v-btn small dark color="light-green">Finish</v-btn>
            
          </v-toolbar>
        </v-card>
        <!-- Forms and Letters card -->
        <v-card class="pa-3" outlined tile>
          <h3 class="subtitle-1 grey--text text--darken-3">Forms & Letters</h3>
          <v-divider class="mb-5"></v-divider>
          <v-card class="mx-auto" flat max-width="500">
            <v-sheet class="pa-0 white">
              <v-text-field
                v-model="search"
                label="Search Directory"
                outlined
                dense
                hide-details
                clearable
                clear-icon="mdi-close-circle-outline"
              ></v-text-field>
              <!-- <v-checkbox v-model="caseSensitive" hide-details label="Case sensitive search"></v-checkbox> -->
            </v-sheet>
            <v-card-text>
              <v-treeview
                v-model="selectedDocument"
                :items="items"
                :search="search"
                :filter="filter"
                :open.sync="open"
                open-on-click
                selected-color="blue darken-1"
                selectable
              >
                <!-- <template v-slot:prepend="{ item }">
                  <v-icon
                    v-if="item.children"
                    v-text="`mdi-${item.id === 1 ? 'folder' : 'folder-network'}`"
                  ></v-icon>
                </template>-->
                <template v-slot:prepend="{ item, open }">
                  <v-icon v-if="!item.file">{{ open ? 'mdi-folder-open' : 'mdi-folder' }}</v-icon>
                  <v-icon v-else>{{ files[item.file] }}</v-icon>
                </template>
              </v-treeview>
              <v-btn block class="mt-5" color="blue darken-3" dark>PRINT SELECTED DOCUMENTS</v-btn>
            </v-card-text>
          </v-card>
        </v-card>
      </v-col>
      <v-col>
        <!-- Last Visits card -->
        <v-card class="pa-3" outlined tile>
          <h3 class="subtitle-1 grey--text text--darken-3">Last Visits</h3>
          <v-divider class="mb-5"></v-divider>
          <template>
            <v-data-table
              dense
              :headers="headers"
              :items="lastVisits"
              item-key="id"
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
    // Last Visits Table
    lastVisits: [
      {
        id: 1,
        date: "12/25/2019",
        hour: "1:30PM",
        attended_by: "Mark Zuckerberg",
        service: "General Services -> Account Cancellation"
      },
      {
        id: 2,
        date: "12/27/2019",
        hour: "2:00PM",
        attended_by: "Mark Zuckerberg",
        service: "General Services -> Account Renovation"
      }
    ],
    headers: [
      { text: "Date", align: "left", value: "date" },
      { text: "Attended at:", value: "hour" },
      { text: "Attended by:", value: "attended_by" },
      { text: "Service received", value: "service" }
    ],
    // Letters & Forms
    selectedDocument: [],
    files: {
      html: "mdi-language-html5",
      js: "mdi-nodejs",
      json: "mdi-json",
      md: "mdi-markdown",
      pdf: "mdi-file-pdf",
      png: "mdi-file-image",
      txt: "mdi-file-document-outline",
      xls: "mdi-file-excel"
    },
    items: [
      {
        id: 2,
        name: "Cumplimiento",
        children: [
          {
            id: 201,
            name: "Document 1",
            file: "png"
          },
          {
            id: 202,
            name: "Document 2",
            file: "png"
          },
          {
            id: 203,
            name: "Document 3",
            file: "png"
          },
          {
            id: 204,
            name: "Document 4",
            file: "png"
          },
          {
            id: 205,
            name: "Document 5",
            file: "png"
          }
        ]
      },
      {
        id: 3,
        name: "Contabilidad",
        children: [
          {
            id: 301,
            name: "Document 6",
            file: "png"
          },
          {
            id: 302,
            name: "Document 7",
            file: "png"
          }
        ]
      },
      {
        id: 4,
        name: "Prestamos Personales",
        children: [
          {
            id: 401,
            name: "Document 8",
            file: "png"
          },
          {
            id: 402,
            name: "Document 9",
            file: "png"
          },
          {
            id: 403,
            name: "Document 10",
            file: "png"
          }
        ]
      }
    ],
    open: [1, 2],
    search: null,
    caseSensitive: false
  }),
  computed: {
    filter() {
      return this.caseSensitive
        ? (item, search, textKey) => item[textKey].indexOf(search) > -1
        : undefined;
    }
  }
};
</script>