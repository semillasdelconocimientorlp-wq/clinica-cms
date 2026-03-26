# src/models/appointmentModel.js

// Appointment model will define appointment schema here

const AppointmentSchema = new Schema({
    patientId: String,
    doctorId: String,
    appointmentDate: Date
});