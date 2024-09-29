package vehiclerental;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.JOptionPane;

import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.Font;
import javax.swing.JScrollPane;
import javax.swing.JSplitPane;
import java.awt.SystemColor;
import javax.swing.border.BevelBorder;
import javax.swing.border.LineBorder;
import javax.swing.border.MatteBorder;
import javax.swing.event.ListSelectionEvent;
import javax.swing.event.ListSelectionListener;
import javax.swing.JTextField;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.SQLException;
import java.awt.event.ActionEvent;
import javax.swing.JSeparator;
import javax.swing.JProgressBar;
import javax.swing.JPasswordField;
import javax.swing.JTree;
import java.awt.FlowLayout;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;

public class AdminDashboard extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;
	private JTextField regField;
	private JTextField nameField;
	private JTextField emailField;
	private JPasswordField passwordField;
	private JTable table;
	private JTextField searchField;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					AdminDashboard frame = new AdminDashboard();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public AdminDashboard() {
		setBackground(new Color(0, 204, 255));
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 1348, 787);
		contentPane = new JPanel();
		contentPane.setBackground(new Color(30, 144, 255));
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("GoCarNow Admin Dashboard");
		lblNewLabel.setForeground(new Color(128, 255, 255));
		lblNewLabel.setFont(new Font("SansSerif", Font.BOLD, 30));
		lblNewLabel.setBounds(472, 23, 443, 30);
		contentPane.add(lblNewLabel);
		
		JPanel registrationPanel = new JPanel();
		registrationPanel.setBorder(new LineBorder(new Color(0, 0, 255), 3, true));
		registrationPanel.setBackground(new Color(51, 153, 204));
		registrationPanel.setBounds(20, 75, 641, 555);
		contentPane.add(registrationPanel);
		registrationPanel.setLayout(null);
		
		JLabel lblNewLabel_2 = new JLabel("Comapany Name: ");
		lblNewLabel_2.setForeground(new Color(255, 255, 255));
		lblNewLabel_2.setBounds(74, 198, 164, 35);
		lblNewLabel_2.setFont(new Font("Tahoma", Font.BOLD, 15));
		registrationPanel.add(lblNewLabel_2);
		
		regField = new JTextField();
		regField.setForeground(Color.GRAY);
		regField.setFont(new Font("Tahoma", Font.PLAIN, 18));
		regField.setBounds(248, 119, 348, 40);
		regField.setBackground(new Color(204, 255, 255));
		registrationPanel.add(regField);
		regField.setColumns(10);
		
		JLabel lblNewLabel_2_1 = new JLabel("Registration Number: ");
		lblNewLabel_2_1.setForeground(new Color(255, 255, 255));
		lblNewLabel_2_1.setBounds(74, 123, 179, 35);
		lblNewLabel_2_1.setFont(new Font("Tahoma", Font.BOLD, 15));
		registrationPanel.add(lblNewLabel_2_1);
		
		nameField = new JTextField();
		nameField.setForeground(Color.GRAY);
		nameField.setFont(new Font("Tahoma", Font.PLAIN, 18));
		nameField.setBounds(248, 198, 348, 40);
		nameField.setBackground(new Color(204, 255, 255));
		nameField.setColumns(10);
		registrationPanel.add(nameField);
		
		JLabel lblNewLabel_2_1_1 = new JLabel("Company Email : ");
		lblNewLabel_2_1_1.setForeground(new Color(255, 255, 255));
		lblNewLabel_2_1_1.setBounds(74, 271, 164, 35);
		lblNewLabel_2_1_1.setFont(new Font("Tahoma", Font.BOLD, 15));
		registrationPanel.add(lblNewLabel_2_1_1);
		
		emailField = new JTextField();
		emailField.setForeground(Color.GRAY);
		emailField.setFont(new Font("Tahoma", Font.PLAIN, 18));
		emailField.setBounds(248, 271, 348, 40);
		emailField.setBackground(new Color(204, 255, 255));
		emailField.setColumns(10);
		registrationPanel.add(emailField);
		
		JButton addButton = new JButton("Add");
		addButton.setBounds(86, 468, 93, 33);
		addButton.setBackground(new Color(0, 255, 0));
		addButton.setFont(new Font("Tahoma", Font.BOLD, 20));
		addButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				int regNo = Integer.parseInt(regField.getText());
				String cname = nameField.getText();
				String cEmail = emailField.getText();
				String cPassword = new String(passwordField.getPassword());
				
				company companyObject=new company();
				boolean sucess = companyObject.insert(regNo, cname, cEmail, cPassword);
				
				if(sucess) {
					JOptionPane.showMessageDialog(addButton,"Data Insert SucessFully");
					regField.setText("");
				    nameField.setText("");
				    emailField.setText(" ");
				    passwordField.setText("");
				}else {
					JOptionPane.showMessageDialog(addButton,"Data Insert Failled,Please Try Again...");
				}
				
				
			}
		});
		registrationPanel.add(addButton);
		
		JButton btnEdit = new JButton("Update");
		btnEdit.addActionListener(new ActionListener() {
			
		

			public void actionPerformed(ActionEvent e) {
				try {
		            // Create an instance of your company class
		            company companyObject = new company();
		            
		            // Assuming you have text fields to input the new name and email
		            String newName = nameField.getText(); 
		            String newEmail = emailField.getText();
		            
		          
		            // Get the selected registration number from the table
		            int regNoToEdit = getSelectedRegNoFromTable(); // You need to implement this method
		            
		            
		            
		            // Call the edit() method to perform the edit operation
		            boolean success = companyObject.edit(regNoToEdit, newName, newEmail);
		            
		            if (success) {
		                JOptionPane.showMessageDialog(btnEdit, "Data edited successfully");
		                regField.setText("");
					    nameField.setText("");
					    emailField.setText(" ");
				
		                
		                // If you need to update the table after editing, you could call view() again
		                DefaultTableModel model = companyObject.view();
		                table.setModel(model);
		            } else {
		                JOptionPane.showMessageDialog(btnEdit, "Failed to edit data");
		            }
		        } catch (SQLException ex) {
		            // Handle SQLExceptions
		            ex.printStackTrace(); // You can log the exception or display an error message to the user
		        }
				
			}

			private int getSelectedRegNoFromTable() {
				 int selectedRowIndex = table.getSelectedRow();
				 if (selectedRowIndex != -1) {
				        // Assuming that the registration number is stored in the first column of the table
				        return (int) table.getValueAt(selectedRowIndex, 0);
				        
				    } else {
				        // If no row is selected, return a default value or throw an exception
				        throw new IllegalStateException("No row is selected.");
				    }
			}
		});
		
		
		
		
		
		
		btnEdit.setBounds(333, 468, 111, 33);
		btnEdit.setFont(new Font("Tahoma", Font.BOLD, 20));
		btnEdit.setBackground(new Color(204, 102, 51));
		registrationPanel.add(btnEdit);
		
		JButton btnDelete = new JButton("Delete");
		btnDelete.setBounds(474, 468, 102, 33);
		btnDelete.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {


				// Prompt the user for confirmation before proceeding with deletion
		        int dialogResult = JOptionPane.showConfirmDialog(null, "Are you sure you want to delete?", "Warning", JOptionPane.YES_NO_OPTION);
		        
		        if (dialogResult == JOptionPane.YES_OPTION) {
		            try {
		                // Create an instance of  company class
		                company companyObject = new company();
		                
		                // Assuming you have a method in class to delete data
		                int regNoToDelete = getSelectedRegNoFromTable(); 
		                boolean success = companyObject.delete(regNoToDelete);
		                
		                if (success) {
		                    JOptionPane.showMessageDialog(null, "Data deleted successfully");
		                    
		                    // If you need to update the table after deletion, you could call view() again
		                    DefaultTableModel model = companyObject.view();
		                    table.setModel(model);
		                } else {
		                    JOptionPane.showMessageDialog(null, "Failed to Delete Data, Select Row You want to Delete.");
		                }
		            } catch (SQLException e1) {
		                // Handle SQLExceptions
		                e1.printStackTrace(); // You can log the exception or display an error message to the user
		            }
				
		        }
			}

			private int getSelectedRegNoFromTable() {
				 // Get the selected row index from the table
			    int selectedRowIndex = table.getSelectedRow();

			    // Check if any row is selected
			    if (selectedRowIndex != -1) {
			        // Assuming that the registration number is stored in the first column of the table
			        return (int) table.getValueAt(selectedRowIndex, 0);
			    } else {
			        // If no row is selected, return a default value (you might handle this case differently based on your requirements)
			        return -1;
			    }
				
			}
		});
		btnDelete.setFont(new Font("Tahoma", Font.BOLD, 20));
		btnDelete.setBackground(new Color(255, 0, 0));
		registrationPanel.add(btnDelete);
		
		JSeparator separator = new JSeparator();
		separator.setBounds(10, 421, 611, 7);
		registrationPanel.add(separator);
		
		JSeparator separator_1 = new JSeparator();
		separator_1.setBounds(10, 87, 611, 7);
		registrationPanel.add(separator_1);
		
		JLabel lblNewLabel_1 = new JLabel("Company Registration");
		lblNewLabel_1.setForeground(new Color(224, 255, 255));
		lblNewLabel_1.setFont(new Font("Tahoma", Font.BOLD | Font.ITALIC, 18));
		lblNewLabel_1.setBounds(10, 48, 243, 35);
		registrationPanel.add(lblNewLabel_1);
		
		JLabel lblNewLabel_2_1_1_1 = new JLabel("Company Password : ");
		lblNewLabel_2_1_1_1.setForeground(new Color(255, 255, 255));
		lblNewLabel_2_1_1_1.setFont(new Font("Tahoma", Font.BOLD, 15));
		lblNewLabel_2_1_1_1.setBounds(74, 351, 179, 35);
		registrationPanel.add(lblNewLabel_2_1_1_1);
		
		passwordField = new JPasswordField();
		passwordField.setForeground(Color.GRAY);
		passwordField.setFont(new Font("Tahoma", Font.PLAIN, 18));
		passwordField.setBackground(new Color(204, 255, 255));
		passwordField.setBounds(248, 347, 348, 40);
		registrationPanel.add(passwordField);
		
		JButton btnView = new JButton("View");
		btnView.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				company companyObject=new company();
				DefaultTableModel model = companyObject.view();
				table.setModel(model);
				
				
			}
		});
		btnView.setFont(new Font("Tahoma", Font.BOLD, 20));
		btnView.setBackground(new Color(51, 102, 255));
		btnView.setBounds(210, 468, 93, 33);
		registrationPanel.add(btnView);
		
		JPanel viewPanel = new JPanel();
		viewPanel.setBackground(new Color(51, 153, 204));
		viewPanel.setBorder(new MatteBorder(3, 3, 3, 3, (Color) Color.BLUE));
		viewPanel.setBounds(659, 75, 663, 555);
		contentPane.add(viewPanel);
		viewPanel.setLayout(null);
		
		JScrollPane scrollPane = new JScrollPane();
		scrollPane.setViewportBorder(new LineBorder(Color.BLACK, 2));
		scrollPane.setBounds(10, 111, 643, 280);
		viewPanel.add(scrollPane);
		
		table = new JTable();
		table.addMouseListener(new MouseAdapter() {
			@Override
			public void mouseClicked(MouseEvent e) {
				 // Get the selected row index
		        int selectedRowIndex = table.getSelectedRow();
		        
		        // Ensure a row is selected
		        if (selectedRowIndex != -1) {
		            // Get data from the selected row
		            Object regNo = table.getValueAt(selectedRowIndex, 0); // Assuming regNo is in the first column
		            Object cname = table.getValueAt(selectedRowIndex, 1); // Assuming cname is in the second column
		            Object cEmail = table.getValueAt(selectedRowIndex, 2); // Assuming cEmail is in the third column
		            
		            // Update text fields with data from the selected row
		            regField.setText(regNo.toString());
		            nameField.setText(cname.toString());
		            emailField.setText(cEmail.toString());
		        }
			}
		});
		scrollPane.setViewportView(table);
		
		JButton btnSearch = new JButton("Search");
		btnSearch.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				// Get the registration number from the user input field
		        int regNoToSearch = Integer.parseInt(searchField.getText());
		        
		        // Create an instance of your company class
		        company companyObject = new company();
		        
		        // Call the searchByRegNo method to search for the registration number
		        ResultSet resultSet = companyObject.searchByRegNo(regNoToSearch);
		        
		        // Process the ResultSet
		        if (resultSet != null) {
		        	try {
		                if (resultSet.next()) {
		                    DefaultTableModel model = new DefaultTableModel();
		                    ResultSetMetaData metaData = resultSet.getMetaData();

		                    // Add columns to the table model based on ResultSet metadata
		                    int columnCount = metaData.getColumnCount();
		                    for (int i = 1; i <= columnCount; i++) {
		                        model.addColumn(metaData.getColumnName(i));
		                    }

		                    // Add rows to the table model based on ResultSet data
		                    do {
		                        Object[] rowData = new Object[columnCount];
		                        for (int i = 1; i <= columnCount; i++) {
		                            rowData[i - 1] = resultSet.getObject(i);
		                        }
		                        model.addRow(rowData);
		                    } while (resultSet.next());

		                    // Display the data in your table component
		                    table.setModel(model);
		                } else {
		                    JOptionPane.showMessageDialog(null, "No results found for registration number: " + regNoToSearch);
		                }

		            } catch (SQLException ex) {
		                ex.printStackTrace(); // Handle SQL exceptions
		            }
		        } else {
		        	JOptionPane.showMessageDialog(null, "No results found for registration number: " + regNoToSearch);
		        }
			}
		});
		btnSearch.setFont(new Font("Tahoma", Font.BOLD, 20));
		btnSearch.setBackground(Color.CYAN);
		btnSearch.setBounds(262, 466, 198, 33);
		viewPanel.add(btnSearch);
		
		searchField = new JTextField();
		searchField.setBackground(new Color(224, 255, 255));
		searchField.setBounds(188, 412, 352, 33);
		viewPanel.add(searchField);
		searchField.setColumns(10);
		
		JButton btnNewButton = new JButton("Exit");
		btnNewButton.setBackground(Color.RED);
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				 System.exit(0);
			}
		});
		btnNewButton.setBounds(545, 37, 89, 23);
		viewPanel.add(btnNewButton);
		
		JButton btnNewButton_1 = new JButton("Back");
		btnNewButton_1.setBackground(SystemColor.info);
		btnNewButton_1.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				Login obj=new Login();
				obj.setVisible(true);
			}
		});
		btnNewButton_1.setBounds(434, 37, 89, 23);
		viewPanel.add(btnNewButton_1);
		
		
	}
}
