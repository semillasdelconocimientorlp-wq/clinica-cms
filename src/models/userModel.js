# src/models/userModel.js

// User model will define user schema here

const UserSchema = new Schema({
    username: String,
    password: String,
    email: String
});