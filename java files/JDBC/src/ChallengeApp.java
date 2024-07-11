import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.Scanner;

public class ChallengeApp {

    public static void main(String[] args) {
        try (Connection connection = DriverManager.getConnection("jdbc:mysql://localhost:3306/competition", "root", "")) {
            Scanner scanner = new Scanner(System.in);

            while (true) {
                System.out.println("1. Register as participant");
                System.out.println("2. Representative login");
                System.out.println("3. Exit");

                System.out.print("Choose an option: ");
                int option = scanner.nextInt();
                scanner.nextLine(); // consume newline

                switch (option) {
                    case 1:
                        ParticipantApp participant = new ParticipantApp();
                        participant.register(connection);
                        break;
                    case 2:
                        RepresentativeApp representative = new RepresentativeApp();
                        representative.loginAndManageParticipants(connection);
                        break;
                    case 3:
                        System.out.println("Exiting...");
                        return;
                    default:
                        System.out.println("Invalid option. Please try again.");
                }
            }
        } catch (SQLException e) {
            System.err.println("Error connecting to the database: " + e.getMessage());
        }
    }
}
