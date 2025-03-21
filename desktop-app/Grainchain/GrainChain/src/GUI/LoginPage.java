package GUI;

import java.awt.EventQueue;

import javax.swing.JFrame;
import java.awt.FlowLayout;
import javax.swing.JSplitPane;
import javax.swing.JPanel;
import java.awt.SystemColor;
import javax.swing.JLabel;
import javax.swing.ImageIcon;
import java.awt.Color;
import java.awt.Font;
import javax.swing.JTextField;
import javax.swing.JButton;

public class LoginPage {

	private JFrame frame;
	private JTextField textField;
	private JTextField textField_1;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					LoginPage window = new LoginPage();
					window.frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the application.
	 */
	public LoginPage() {
		initialize();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		frame = new JFrame();
		frame.getContentPane().setFont(new Font("Tahoma", Font.PLAIN, 16));
		frame.getContentPane().setBackground(new Color(204, 204, 204));
		frame.setBounds(100, 100, 939, 534);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		frame.setResizable(true);
		frame.setTitle("GrainChain Login Portal");
		
		JPanel panel = new JPanel();
		panel.setBackground(new Color(51, 102, 102));
		panel.setBounds(0, 0, 503, 497);
		frame.getContentPane().add(panel);
		panel.setLayout(null);
		
		JLabel lblNewLabel_2_2 = new JLabel("New label");
		lblNewLabel_2_2.setIcon(new ImageIcon("C:\\Users\\HIRUSHA\\Desktop\\Grainchain\\GrainChain\\src\\GUI\\logo-tundra (2).png"));
		lblNewLabel_2_2.setBounds(155, 113, 200, 113);
		panel.add(lblNewLabel_2_2);
		
		JLabel lblNewLabel = new JLabel("Agriculture Ministry");
		lblNewLabel.setForeground(new Color(255, 255, 255));
		lblNewLabel.setFont(new Font("Tahoma", Font.BOLD, 24));
		lblNewLabel.setBounds(141, 236, 240, 78);
		panel.add(lblNewLabel);
		
		JLabel lblNewLabel_3 = new JLabel("Powered By Litch");
		lblNewLabel_3.setFont(new Font("SimSun-ExtG", Font.PLAIN, 12));
		lblNewLabel_3.setForeground(new Color(255, 255, 255));
		lblNewLabel_3.setBounds(201, 442, 117, 13);
		panel.add(lblNewLabel_3);
		
		JLabel lblNewLabel_1 = new JLabel("Login");
		lblNewLabel_1.setFont(new Font("Yu Gothic UI Semibold", Font.BOLD, 26));
		lblNewLabel_1.setBounds(668, 66, 148, 36);
		frame.getContentPane().add(lblNewLabel_1);
		
		JLabel lblNewLabel_2 = new JLabel("Username");
		lblNewLabel_2.setFont(new Font("Tahoma", Font.PLAIN, 16));
		lblNewLabel_2.setBounds(567, 140, 123, 30);
		frame.getContentPane().add(lblNewLabel_2);
		
		JLabel lblNewLabel_2_1 = new JLabel("Password");
		lblNewLabel_2_1.setFont(new Font("Tahoma", Font.PLAIN, 16));
		lblNewLabel_2_1.setBounds(567, 238, 123, 36);
		frame.getContentPane().add(lblNewLabel_2_1);
		
		textField = new JTextField();
		textField.setBounds(567, 180, 217, 36);
		frame.getContentPane().add(textField);
		textField.setColumns(10);
		
		textField_1 = new JTextField();
		textField_1.setColumns(10);
		textField_1.setBounds(567, 284, 217, 36);
		frame.getContentPane().add(textField_1);
		
		JButton btnNewButton = new JButton("Confirm");
		btnNewButton.setBounds(630, 364, 119, 48);
		frame.getContentPane().add(btnNewButton);
	}
}
