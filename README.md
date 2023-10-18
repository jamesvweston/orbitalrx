# James Weston OrbitalRx
The coding test description can be found [here](https://drive.google.com/file/d/1CsgoaoFdlQMIs-oq3KdwpiCagx3OIaIg/view?usp=share_link) for the [Team Lead, Full Stack Developer](https://www.indeed.com/viewjob?from=app-tracker-post_apply-appcard&hl=en&jk=3012e635e69ae970&tk=1hck861q82pt7000) position.

- The project structure is explained [here](./.documentation/PROJECT_STRUCTURE.md)
- Local installation requirements and instructions can be found [here](./.documentation/LOCAL_DEVELOPMENT.md)

## Summary of Tasks
### Design a database schema for the business
- A multi-tenant approach was used for trucks, rather than having a database per truck
- The relationships between tables can explained as follows:
  - An order is specific to a truck
  - Orders have many order items.
    - Each order item (what would be a cup of coffee) has a specific bean and type
- Tracking of coffee beans and running a statistical analysis is not supported.
- Although a react app was scaffolded, there was no time to do any implementation.
