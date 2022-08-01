<?php

namespace LaraPackage\Schema;


class DatabaseSchema {

    public function tables_schema(){
        $schema=new DatabaseSchema();
        $table_array = [];
        $table_array = $schema->getSchema();
        foreach($table_array as $table_inner_array){
            foreach($table_inner_array as $key=>$value){
                if($key=='tableName'  &&  $value!=""){
                    return $value;
                }
                else{
                    continue;
                }

            }
        }
        
    }

    public function getSchema() {

        return [
            [
                "tableName" => "accounts",
                "columns" => [
                    [
                        "columnName" => "accountID",
                        "isPrimary" => true,
                        "fieldType" => "string"
                    ], 
                    [
                        "columnName" => "emailAddress",
                        "isPrimary" => false,
                        "fieldType" => "string"
                    ]
                ]
            ], [
                        "tableName" => "roles",
                        "columns" => [
                            [
                                "columnName" => "roleID",
                                "isPrimary" => true,
                                "fieldType" => "string"
                            ], 
                            [
                                "columnName" => "roleName",
                                "isPrimary" => false,
                                "fieldType" => "string"
                            ]
                        ]
                ],[
                    "tableName" => "apis",
                    "columns" => [
                        [
                            "columnName" => "roleID",
                            "isPrimary" => true,
                            "fieldType" => "string"
                        ], 
                        [
                            "columnName" => "roleName",
                            "isPrimary" => false,
                            "fieldType" => "string"
                        ]
                    ]
                ]
        ];
    }
}