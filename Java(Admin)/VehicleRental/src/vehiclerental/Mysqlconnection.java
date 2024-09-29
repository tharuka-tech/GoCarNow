package vehiclerental;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class Mysqlconnection {
	private String username;
	private String pwd;
	private String dbname;
	private Connection conn;
	
	public Mysqlconnection() {
		this.dbname = "javadb";
	    this.username = "root";
	    this.pwd = "";
	    connectDb();
	 }
	
	
	
	
	
	public Connection connectDb() {
		// TODO Auto-generated method stub
		try {
			conn=DriverManager.getConnection("jdbc:mysql://localhost:3309/"+dbname,username,pwd);
			return conn;
		}catch(SQLException e) {
			System.out.print(e);
			return conn;
		}
	}	
	
}
