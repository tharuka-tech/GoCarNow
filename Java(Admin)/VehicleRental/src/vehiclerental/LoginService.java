package vehiclerental;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

public class LoginService {
	  private static final String JDBC_URL = "jdbc:mysql://localhost:3309/javadb";
	    private static final String JDBC_USERNAME = "root";
	    private static final String JDBC_PASSWORD = "";

	    public static boolean validateAdmin(String username, String password) {
	        boolean isValid = false;
	        Connection conn = null;
	        PreparedStatement stmt = null;
	        ResultSet rs = null;

	        try {
	            conn = DriverManager.getConnection(JDBC_URL, JDBC_USERNAME, JDBC_PASSWORD);
	            String query = "SELECT * FROM admin WHERE username = ? AND password = ?";
	            stmt = conn.prepareStatement(query);
	            stmt.setString(1, username);
	            stmt.setString(2, password);
	            rs = stmt.executeQuery();
	            isValid = rs.next();
	        } catch (SQLException e) {
	            e.printStackTrace();
	        }
	        return isValid;
	    }    

}
