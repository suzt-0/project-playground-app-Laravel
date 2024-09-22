# Project Management System

This repository contains a **Project Management System** built using **Laravel**, **Blade**, and **Tailwind CSS**. It is designed to help teams manage projects, assign tasks, track progress, and collaborate efficiently.

## Features

- **Project Creation & Management:** Admin users can create, edit, and delete projects.
- **Task Assignment:** Admins can assign tasks to project members and set priorities.
- **User Roles:** Admins can invite or remove members, while members can raise issues and participate in project discussions.
- **Task Status & Priorities:** Tasks include status updates and priority levels for better workflow management.
- **Issue Tracking:** Members can report issues, and admins can manage suggestions and solutions within the task interface.
- **Authorization & Security:** Gate authorization ensures that only admins can modify tasks and projects.

## Technologies Used

- **Frontend:** Blade, Tailwind CSS
- **Backend:** Laravel (PHP)
- **Database:** MySQL
- **Other:** Composer, Git

## Installation

To set up the project locally, follow these steps:

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/project-management-system.git
    ```

2. Navigate to the project directory:

    ```bash
    cd project-management-system
    ```

3. Install dependencies:

    ```bash
    composer install
    npm install
    ```

4. Set up the environment:

    - Copy `.env.example` to `.env`
    - Set your database credentials in the `.env` file

5. Run database migrations:

    ```bash
    php artisan migrate
    ```

6. Start the development server:

    ```bash
    php artisan serve
    ```

7. Visit `http://localhost:8000` in your browser to access the application.

## Usage

- **Admin users** can create, edit, and delete projects and tasks. They can invite members to projects using the project name and ID, and remove members if needed.
- **Members** can view and work on tasks, raise issues, and participate in discussions within a project.

## Screenshots

### Dashboard
![Dashboard Screenshot](path-to-dashboard-image)

### Task View
![Task View Screenshot](path-to-task-view-image)

## Contributing

Feel free to open an issue or submit a pull request if you have ideas for improvements or bug fixes.

## License

This project is licensed under the MIT License.

---

### Contact

For any questions or suggestions, feel free to contact me via:

- **Email:** [your-email@example.com](mailto:sujit.202023@ncit.edu.np)
- **GitHub:** [your-username](https://github.com/suzt-0)
