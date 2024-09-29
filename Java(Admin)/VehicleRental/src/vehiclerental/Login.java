package vehiclerental;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

import project1.inter2;

import javax.swing.JLabel;
import javax.swing.JOptionPane;

import java.awt.Font;
import javax.swing.JTextField;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.awt.Color;
import javax.swing.JPasswordField;
import javax.swing.ImageIcon;

public class Login extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;
	private JTextField nameField;
	private JPasswordField passwordField;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Login frame = new Login();
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
	public Login() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 703, 461);
		contentPane = new JPanel();
		contentPane.setBackground(new Color(30, 144,255));
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JPanel panel = new JPanel();
		panel.setBackground(new Color(51, 102, 153));
		panel.setBounds(10, 32, 669, 371);
		contentPane.add(panel);
		panel.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("Admin Login");
		lblNewLabel.setBounds(115, 52, 126, 25);
		panel.add(lblNewLabel);
		lblNewLabel.setFont(new Font("Tahoma", Font.BOLD, 20));
		
		JLabel lblNewLabel_2 = new JLabel("Welcome to GoCarNow");
		lblNewLabel_2.setBounds(28, 28, 318, 27);
		panel.add(lblNewLabel_2);
		lblNewLabel_2.setFont(new Font("Tahoma", Font.BOLD, 25));
		
		JLabel lblNewLabel_3 = new JLabel("");
		lblNewLabel_3.setBounds(345, 0, 343, 371);
		panel.add(lblNewLabel_3);
		lblNewLabel_3.setIcon(new ImageIcon("C:\\Users\\Tharuka\\Downloads\\car.jpg"));
		
		JButton btnNewButton = new JButton("Login");
		btnNewButton.setForeground(new Color(255, 255, 255));
		btnNewButton.setBounds(115, 315, 111, 33);
		panel.add(btnNewButton);
		btnNewButton.setBackground(new Color(51, 51, 255));
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				String username = nameField.getText();
                String password = new String(passwordField.getPassword());

                if (LoginService.validateAdmin(username, password)) {
                    JOptionPane.showMessageDialog(null, "Login Successful!");
	                    AdminDashboard obj=new AdminDashboard();
	    				obj.setVisible(true);
                } else {
                    JOptionPane.showMessageDialog(null, "Invalid Login. Try Again!");
                }
			}
		});
		btnNewButton.setFont(new Font("Tahoma", Font.BOLD, 18));
		
		nameField = new JTextField();
		nameField.setBounds(10, 175, 309, 33);
		panel.add(nameField);
		nameField.setForeground(Color.DARK_GRAY);
		nameField.setBackground(new Color(153, 204, 255));
		nameField.setFont(new Font("Tahoma", Font.PLAIN, 15));
		nameField.setColumns(10);
		
		passwordField = new JPasswordField();
		passwordField.setBounds(10, 261, 309, 33);
		panel.add(passwordField);
		passwordField.setForeground(Color.DARK_GRAY);
		passwordField.setBackground(new Color(153, 204, 255));
		
		JLabel lblNewLabel_1_1 = new JLabel("Password:");
		lblNewLabel_1_1.setBounds(10, 239, 164, 13);
		panel.add(lblNewLabel_1_1);
		lblNewLabel_1_1.setFont(new Font("Tahoma", Font.BOLD, 15));
		
		JLabel lblNewLabel_1 = new JLabel("User Name:");
		lblNewLabel_1.setBounds(10, 153, 164, 13);
		panel.add(lblNewLabel_1);
		lblNewLabel_1.setFont(new Font("Tahoma", Font.BOLD, 15));
		
		JButton btnNewButton_1 = new JButton("Exit");
		btnNewButton_1.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				 System.exit(0);
			}
		});
		btnNewButton_1.setBackground(new Color(255, 0, 0));
		btnNewButton_1.setBounds(588, 11, 89, 23);
		contentPane.add(btnNewButton_1);
	}
}
