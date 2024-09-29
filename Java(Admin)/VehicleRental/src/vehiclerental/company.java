package vehiclerental;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import javax.swing.table.DefaultTableModel;

public class company {
	
	protected int regNo;
	protected String cname;
	protected String cEmail;
	protected String cPassword;
	protected Mysqlconnection dbc;
	


	//parameterlized constructor
	public company(int regNo,String cname,String cEmail,String cPassword) {
		this.regNo=regNo;
		this.cname=cname;
		this.cEmail=cEmail;
		this.cPassword=cPassword;
	
	
	}
	//constructor
	public company() {
		dbc=new Mysqlconnection();
		
	}
	

	
	//insert data
	public Boolean insert(int regNo,String cname,String cEmail,String cPassword) {
		try {
			String mysql="INSERT INTO companyregister(regNo,cname,cEmail,cPassword)VALUES(?,?,?,?)";
			PreparedStatement statement=dbc.connectDb().prepareStatement(mysql);
			
			statement.setInt(1,regNo);
			statement.setString(2,cname);
			statement.setString(3,cEmail);
			statement.setString(4,cPassword);
			
			if(regNo==0||cname==null||cEmail==null||cPassword==null||cPassword.isEmpty()) {
				return false;
			
			}else {
				int rowsInserted=statement.executeUpdate();
				if(rowsInserted>0) {
					return true;
				}else {
					return false;
				}
			}
			
			
		}catch(SQLException e) {
			return false;
		}
		
	}
	
	
	
	
	
	
	
	
	
      //view method
	public  DefaultTableModel view(){
		DefaultTableModel model = new DefaultTableModel();
		
		
		try {
			String mysql="SELECT regNo, cname, cEmail FROM companyregister";
			PreparedStatement statement=dbc.connectDb().prepareStatement(mysql);
			
			ResultSet resultSet = statement.executeQuery();
			
			//colums names
			int columCount = resultSet.getMetaData().getColumnCount();
			for(int i = 1;i <= columCount;i++) {
				model.addColumn(resultSet.getMetaData().getColumnName(i));
			}
			
			
			//raw data
			while(resultSet.next()) {
				Object[] rowData = new Object [columCount];
				for(int i=0; i < columCount;i++) {
					rowData[i] = resultSet.getObject(i+1);
				}
				model.addRow(rowData);
			}
			
					
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		
			
		return model;			
	}
	
	
	
	
	
	
	
	// Edit method
    public boolean edit(int regNo, String newName, String newEmail) throws SQLException {
        // SQL statement for update operation
        String mysql = "UPDATE companyregister SET cname = ?, cEmail = ? WHERE regNo = ?";
        
        try (
            // Establish connection and create PreparedStatement
        		PreparedStatement statement=dbc.connectDb().prepareStatement(mysql);
        ) {
            // Set the parameters for the PreparedStatement
            statement.setString(1, newName);
            statement.setString(2, newEmail);
            statement.setInt(3, regNo);
            
            // Execute the update operation
            int rowsUpdated = statement.executeUpdate();
            
            // Check if any rows were affected
            if (rowsUpdated > 0) {
                return true; // Update successful
            } else {
                return false; // No rows were updated (perhaps no matching record found)
            }
        }
    }
	
	
	
	
	
	
	
	
	
	
	
    // Delete method
    public boolean delete(int regNo) throws SQLException {
        // SQL statement for delete operation
        String mysql = "DELETE FROM companyregister WHERE regNo = ?";
        
        try (
            // Establish connection and create PreparedStatement
        		PreparedStatement statement=dbc.connectDb().prepareStatement(mysql);
            
        ) {
            // Set the parameter for the PreparedStatement
            statement.setInt(1, regNo);
            
            // Execute the delete operation
            int rowsDeleted = statement.executeUpdate();
            
            // Check if any rows were affected
            if (rowsDeleted > 0) {
                return true; // Deletion successful
            } else {
                return false; // No rows were deleted (perhaps no matching record found)
            }
        }
    }
	
    
    
    public ResultSet searchByRegNo(int regNo) {
        try {
            String mysql = "SELECT regNo, cname, cEmail FROM companyregister WHERE regNo = ?";
            PreparedStatement statement = dbc.connectDb().prepareStatement(mysql);
            statement.setInt(1, regNo);
            return statement.executeQuery();
        } catch (SQLException e) {
            e.printStackTrace();
            return null;
        }
    }
    
    
    
    
    

    
}