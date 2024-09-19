# User Access Management System with PHP & MySQL

The **User Access Management System** is a comprehensive solution designed to streamline the management of user accounts, roles, and permissions within a web application. This system, developed as a class project, showcases practical applications of PHP and MySQL in managing user data and access controls. It includes a user-friendly admin dashboard that facilitates various administrative tasks.

#### Key Components:

1. **User Overview**:

    - **View Users**: The admin dashboard displays a table with details of all users, including their ID, name, email, phone number, and role. This view allows administrators to easily monitor and manage user accounts.

2. **Role Management**:

    - **Update Roles**: Administrators have the capability to update user roles from the dashboard. The available roles include User, Manager, and Admin. This flexibility allows for dynamic changes in user permissions based on their needs or actions.
    - **Role Badges**: Users' roles are highlighted with different badges:
        - **Admin**: Green badge for users with the highest level of access.
        - **Manager**: Blue badge for users with mid-level access.
        - **User**: Gray badge for regular users with basic access.

3. **Account Control**:

    - **Suspend/Unsuspend Users**: Admins and Managers can suspend or unsuspend user accounts. Suspended users are indicated with a warning button, allowing for easy toggling of their account status.
    - **Delete Users**: Only Admins have the ability to permanently delete user accounts, ensuring that critical actions are restricted to the highest authority.

4. **Authentication and Access**:
    - **Secure Login/Logout**: Users must log in to access the dashboard, with their session managed securely.
    - **Role-Based Actions**: Different actions are available based on user roles:
        - **Admins**: Can update roles, suspend/unsuspend, and delete users.
        - **Managers**: Can only suspend or unsuspend users.
        - **Users**: Can view their information but have no management capabilities.

#### Implementation:

The management interface uses Bootstrap for styling and includes functionalities for role management, account suspension, and deletion based on the user's role. The interface ensures that actions such as role updates and account suspension are performed through secure links, with prepared statements in PHP to guard against SQL injection attacks.

This feature not only demonstrates practical use of PHP and MySQL but also emphasizes the importance of role-based access control in web application security.
