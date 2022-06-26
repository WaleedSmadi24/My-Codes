package eventDrivenProgramming;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.*;

public class SignupScreen
{

	public static void main(String[] args)
	{
		JFrame frame = new JFrame("Application Sign in");
		frame.setSize(500,500);
		
		JLabel UserName = new JLabel("User Name");
		UserName.setBounds(10, 20, 80, 25);
		frame.add(UserName);
		
		JLabel Password = new JLabel("Password");
		Password.setBounds(10, 50, 80, 25);
		frame.add(Password);
		
		JTextField UserData = new JTextField(25);
		UserData.setBounds(100, 20, 165, 25);
		frame.add(UserData);
		
		JPasswordField PasswordData = new JPasswordField(25);
		PasswordData.setBounds(100, 50, 165, 25);
		frame.add(PasswordData);
		
		JButton SignInButton = new JButton("Sign in");
		SignInButton.setBounds(125, 85, 80, 25);
		frame.add(SignInButton);
		
		JCheckBox Remember = new JCheckBox("Remember Me ?");
		Remember.setBounds(70, 120, 200, 25);
		frame.add(Remember);
		
		JLabel SignedSuccesfully = new JLabel();
		SignedSuccesfully.setBounds(10, 110, 300, 025);
		frame.add(SignedSuccesfully);
		
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setLayout(null);
		frame.setVisible(true);
		
		
		SignInButton.addActionListener(new ActionListener()
		{		
			@Override
			public void actionPerformed(ActionEvent e)
			{
				JOptionPane.showMessageDialog(SignInButton, "You Signed in Succesfully");
			}
		});
	
	}
}

