===Database login

== Table structure for table balance

|------
|Column|Type|Null|Default
|------
|balance|int(11)|No|
== Dumping data for table balance

== Table structure for table booked_hist

|------
|Column|Type|Null|Default
|------
|phone|int(11)|No|
|name|varchar(20)|No|
|idproof|varchar(20)|No|
|room_type|varchar(20)|No|
|checkin|date|No|
|checkout|date|No|
|days|int(11)|No|
|ac|varchar(5)|No|
|breakfast|varchar(5)|No|
|lunch|varchar(5)|No|
|snacks|varchar(5)|No|
|dinner|varchar(5)|No|
|swimming|varchar(5)|No|
|price|int(11)|No|
|book_id|int(11)|No|
== Dumping data for table booked_hist

== Table structure for table book_id

|------
|Column|Type|Null|Default
|------
|book_id|int(11)|No|
== Dumping data for table book_id

== Table structure for table confirmed_booking

|------
|Column|Type|Null|Default
|------
|phone|int(11)|No|
|name|varchar(20)|No|
|idproof|varchar(20)|No|
|room_type|varchar(20)|No|
|checkin|date|No|
|checkout|date|No|
|days|int(11)|No|
|ac|varchar(5)|No|
|breakfast|varchar(5)|No|
|lunch|varchar(5)|No|
|snacks|varchar(5)|No|
|dinner|varchar(5)|No|
|swimming|varchar(5)|No|
|price|int(11)|No|
|book_id|int(11)|No|
== Dumping data for table confirmed_booking

== Table structure for table payment

|------
|Column|Type|Null|Default
|------
|payment_id|int(10)|No|
|payment_type|text|No|
== Dumping data for table payment

== Table structure for table rooms

|------
|Column|Type|Null|Default
|------
|room_id|int(10)|No|
|type|varchar(10)|No|
|capacity|int(5)|No|
|price|int(10)|No|
|room_number|int(10)|No|
== Dumping data for table rooms

== Table structure for table rooms_count

|------
|Column|Type|Null|Default
|------
|room_type|varchar(20)|No|
|available_rooms|int(11)|No|
|occupied_rooms|int(11)|No|
|price|int(11)|No|
== Dumping data for table rooms_count

== Table structure for table staff

|------
|Column|Type|Null|Default
|------
|username|varchar(11)|No|
|fname|text|No|
|lname|text|No|
|email|varchar(11)|No|
|password|varchar(15)|No|
|role|text|No|
== Dumping data for table staff

== Table structure for table temp

|------
|Column|Type|Null|Default
|------
|pwd|varchar(20)|No|
== Dumping data for table temp

== Table structure for table temp_book_id

|------
|Column|Type|Null|Default
|------
|book_id|int(11)|No|
== Dumping data for table temp_book_id

== Table structure for table temp_room

|------
|Column|Type|Null|Default
|------
|phone|int(11)|No|
|idproof|varchar(20)|No|
== Dumping data for table temp_room

== Table structure for table temp_session

|------
|Column|Type|Null|Default
|------
|phone|int(11)|No|
|password|varchar(20)|No|
|name|varchar(20)|No|
|email|varchar(30)|No|
|idproof|varchar(20)|No|
|dob|date|No|
== Dumping data for table temp_session

== Table structure for table user

|------
|Column|Type|Null|Default
|------
|id|bigint(20)|No|
|user_id|bigint(20)|No|
|fname|text|No|
|lname|text|No|
|email|varchar(25)|No|
|password|varchar(50)|No|
|cpassword|int(20)|No|
|mobile_phone|int(12)|No|
== Dumping data for table user

== Table structure for table user_room_book

|------
|Column|Type|Null|Default
|------
|phone|int(11)|No|
|name|varchar(20)|No|
|idproof|varchar(20)|No|
|room_type|varchar(20)|No|
|checkin|date|No|
|checkout|date|No|
|days|int(11)|No|
|ac|varchar(5)|No|
|breakfast|varchar(5)|No|
|lunch|varchar(5)|No|
|snacks|varchar(5)|No|
|dinner|varchar(5)|No|
|swimming|varchar(5)|No|
|status|varchar(20)|No|
|price|int(11)|No|
|book_id|int(11)|No|
== Dumping data for table user_room_book