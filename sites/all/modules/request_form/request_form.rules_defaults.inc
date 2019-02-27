<?php
function request_form_default_rules_configuration() {
  $configs = array();
  
  $rule = '{ "custom_rule_creating_reviews_for_your_organization" : {
    "LABEL" : "Creating reviews for your organization",
    "PLUGIN" : "reaction rule",
    "OWNER" : "rules",
    "REQUIRES" : [ "rules", "rules_conditional" ],
    "ON" : { "node_insert--review" : { "bundle" : "review" } },
    "IF" : [
      { "user_has_role" : {
          "account" : [ "site:current-user" ],
          "roles" : { "value" : { "5" : "5" } }
        }
      }
    ],
    "DO" : [
      { "LOOP" : {
          "USING" : { "list" : [ "site:current-user:og-user-node" ] },
          "ITEM" : { "users_company" : "Users company" },
          "DO" : [
            { "CONDITIONAL" : [
                {
                  "IF" : { "data_is" : {
                      "data" : [ "users-company:nid" ],
                      "value" : [ "node:field-company:nid" ]
                    }
                  },
                  "DO" : [
                    { "drupal_message" : {
                        "message" : "Sorry, but you can\u0027t add your company for review.",
                        "type" : "warning"
                      }
                    },
                    { "node_unpublish" : { "node" : [ "node" ] } }
                  ]
                },
                { "ELSE" : [ { "drupal_message" : { "message" : "Thank you for your feedback!" } } ] }
              ]
            },
            { "mail_to_users_of_role" : {
                "roles" : { "value" : { "3" : "3" } },
                "subject" : "New review!!!",
                "message" : "New review is added."
              }
            },
            { "redirect" : { "url" : "node:field-company:url" } }
          ]
        }
      }
    ]
  }
}';

  $configs['custom_rule_creating_reviews_for_your_organization'] = rules_import($rule);
 
  
  return $configs;
}

