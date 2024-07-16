import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.Scanner;

public class ParticipantApp {

    public void register(Connection connection) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Enter participant details:");

        System.out.print("Username: ");
        String username = scanner.nextLine();

        System.out.print("First name: ");
        String firstname = scanner.nextLine();

        System.out.print("Last name: ");
        String lastname = scanner.nextLine();

        System.out.print("Email: ");
        String email = scanner.nextLine();

        System.out.print("Date of birth (yyyy-mm-dd): ");
        LocalDate dateOfBirth = LocalDate.parse(scanner.nextLine());

        System.out.print("School Reg No: ");
        String registrationNumber = scanner.nextLine();

        System.out.print("Image File: ");
        String imageFile = scanner.nextLine();

        System.out.print("Status (pending/confirmed/rejected): ");
        String status = scanner.nextLine();

        // Validate status input
        if (!status.equals("pending") && !status.equals("confirmed") && !status.equals("rejected")) {
            System.err.println("Invalid status input. Please enter pending, confirmed, or rejected.");
            return; // Exit the method if invalid input
        }

        // Check if the school Reg No exists in the schools table
        String checkSchoolSql = "SELECT COUNT(*) FROM schools WHERE registration_number = ?";
        try (PreparedStatement checkSchoolStatement = connection.prepareStatement(checkSchoolSql)) {
            checkSchoolStatement.setString(1, registrationNumber);
            ResultSet resultSet = checkSchoolStatement.executeQuery();
            resultSet.next();
            int count = resultSet.getInt(1);
            if (count == 0) {
                System.err.println("Error registering participant: School Reg No " + registrationNumber + " does not exist.");
                return;
            }
        } catch (SQLException e) {
            System.err.println("Error checking school registration number: " + e.getMessage());
            return;
        }

        // Insert the participant into the participants table
        String sql = "INSERT INTO participants (username, firstname, lastname, email, date_of_birth, registration_number, image_file, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        try (PreparedStatement statement = connection.prepareStatement(sql)) {
            statement.setString(1, username);
            statement.setString(2, firstname);
            statement.setString(3, lastname);
            statement.setString(4, email);
            statement.setObject(5, dateOfBirth);
            statement.setString(6, registrationNumber);
            statement.setString(7, imageFile);
//            statement.setString(8, status);

            int rowsAffected = statement.executeUpdate();
            if (rowsAffected > 0) {
                System.out.println("Participant registered successfully!");
            } else {
                System.out.println("Failed to register participant.");
            }
        } catch (SQLException e) {
            System.err.println("Error registering participant: " + e.getMessage());
        }
    }
}

            
