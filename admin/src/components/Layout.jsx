import React from 'react';
import { Link } from 'react-router-dom';
import {
  AppBar,
  Toolbar,
  Typography,
  Drawer,
  List,
  ListItem,
  ListItemText,
} from '@mui/material';

const drawerWidth = 240;

function Layout({ children }) {
  return (
    <div style={{ display: 'flex' }}>
      <AppBar
        position="fixed"
        style={{ width: `calc(100% - ${drawerWidth}px)`, marginLeft: drawerWidth }}
      >
        <Toolbar>
          <Typography variant="h6" noWrap>
            Admin Dashboard
          </Typography>
        </Toolbar>
      </AppBar>
      <Drawer
        style={{ width: drawerWidth, flexShrink: 0 }}
        variant="permanent"
        anchor="left"
      >
        <Toolbar />
        <div style={{ overflow: 'auto' }}>
          <List>
            <ListItem button component={Link} to="/products">
              <ListItemText primary="Products" />
            </ListItem>
            <ListItem button component={Link} to="/orders">
              <ListItemText primary="Orders" />
            </ListItem>
          </List>
        </div>
      </Drawer>
      <main style={{ flexGrow: 1, padding: '24px' }}>
        <Toolbar />
        {children}
      </main>
    </div>
  );
}

export default Layout;
